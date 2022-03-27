<?php

namespace Modules\FinanceClientMod\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use Illuminate\Validation\Rule;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'phone',
        'email',
    ];

    public static function getInstance() : Client
    {
        return new Client([
            'name' => '',
            'cpf' => '',
            'phone' => '',
            'email' => '',
        ]);
    }

    public function rules() : array
    {
        return [
            'name' => [
                'required',
                Rule::unique('clients', 'name')->ignore($this->id),
            ],
            'cpf' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable|email:dns',
        ];
    }

    public function messages() : array
    {
        return [
            'name.required' => 'O campo :attribute precisa ser preenchido.',
            'name.unique' => 'Já existe um Cliente com este nome.',
            'email.email' => 'O campo :attribute precisa ser um email válido.',
        ];
    }

    public function namedFields() : array
    {
        return [
            'id' => 'ID',
            'name' => 'Nome',
            'cpf' => 'CPF/CNPJ',
            'phone' => 'Fone',
            'email' => 'E-mail',
        ];
    }

    public function computedValues(): array
    {
        return [
            'name' => function ($value) {
                $limit = 12;
                return ( strlen($value) > $limit ) ? substr( $value, 0, $limit ) . '...' : $value;
            }
        ];
    }

    protected static function newFactory()
    {
        return \Modules\BpModFinance\Database\factories\ClientFactory::new();
    }
}
