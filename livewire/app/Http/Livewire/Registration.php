<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registration extends Component
{
	public $userId;
	public $userName;
	public $email;
	public $passwd;
	public $passwd_confirmation;
	
	// protected $rules = [
	// 	'userId' => 'required|string|between:5,15',
	// 'userName' => 'required|string|max:10',
	// 	'email'	=> 'required|email:filter|max:100',
	// 	'passwd' => 'required|confirmed|between:6,20|not_regex:/[^A-Za-z0-9!@#$%^&*]/',
	// 	'passwd_confirmation' => 'required|between:6,20|matches[passwd]',
	// ];
	
	protected $messages = [
		'userId.required'	=> '아이디는 필수입력입니다.',
		'userId.between'	=> '아이디는 최소 :min자 최대 :max자 까지입니다.',
		'userName.required'	=> '이름은 필수입력입니다.',
        'email.required' => '이메일은 필수입력입니다.',
		'email.*' => '형식에 맞는 이메일 입력해주세요.',
		'passwd.required' => '비밀번호를 입력하세요.',
		'passwd.between' => '비밀번호는 최소:min자 최대:max자 입니다.',
		'passwd.not_regex' => '비밀번호는 숫자,영문 대소문자와 특수문자(! @ # $ % ^ & *) 만 가능합니다.',
		'passwd.confirmed' => '비밀번호가 일치하지 않습니다.',
		'passwd_confirmation.required' => '확인 비밀번호를 입력하세요.',
		'passwd_confirmation.between' => '확인 비밀번호는 최소:min자 최대:max자 입니다.',
		'passwd.same' => '비밀번호가 일치하지 않습니다.',
    ];
	
	public function updated($propertyName)
	{
        $this->validateOnly($propertyName, [
            'userId' => 'string|between:5,15',
			'userName' => 'string|max:10',
			'email'	=> 'email:filter|max:100',
			'passwd' => 'confirmed|between:6,20|not_regex:/[^A-Za-z0-9!@#$%^&*]/',
            'passwd_confirmation' => 'between:6,20|same:passwd',
        ]);
    }
	
	public function saveForm()
    {
		$validatedData = $this->validate([
            'userId' => 'required|string|between:5,15',
			'userName' => 'required|string|max:10',
			'email'	=> 'required|email:filter|max:100',
			'passwd' => 'required|confirmed|between:6,20|not_regex:/[^A-Za-z0-9!@#$%^&*]/',
            'passwd_confirmation' => 'required|between:6,20|same:passwd',
        ]);
		
        
		dd($validatedData);
    }
	
    public function render()
    {
        return view('livewire.registration');
    }
}
