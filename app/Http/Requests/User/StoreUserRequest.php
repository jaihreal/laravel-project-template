<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
class StoreUserRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */
  public function rules(): array
  {
		$userRoles = config('constants.user.roles');

		return [
			'first_name' 	=> ['required', 'string', 'max:255'],
			'middle_name' => ['nullable', 'string', 'max:255'],
			'last_name' 	=> ['required', 'string', 'max:255'],
			'role' 				=> ['required', Rule::in($userRoles)],
			'email' => [
				'max:255',
				'required',
				'email:rfc,dns,spoof,filter',
				Rule::unique(User::class, 'email')->whereNull('deleted_at')
			],
			'password' => [
				'max:255',
				'required',
				'confirmed',
				Password::min(8)
					->letters()
					->mixedCase()
					->numbers()
					->symbols()
					->uncompromised(),
			],
		];
  }
}
