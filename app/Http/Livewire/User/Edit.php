<?php

namespace App\Http\Livewire\User;

use App\Models\Country;
use App\Models\Role;
use App\Models\StudentClass;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public User $user;

    public array $roles = [];

    public string $password = '';

    public array $listsForFields = [];

    public function mount(User $user)
    {
        $this->user  = $user;
        $this->roles = $this->user->roles()->pluck('id')->toArray();
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.user.edit');
    }

    public function submit()
    {
        $this->validate();
        $this->user->password = $this->password;
        $this->user->save();
        $this->user->roles()->sync($this->roles);

        return redirect()->route('admin.users.index');
    }

    protected function rules(): array
    {
        return [
            'user.name' => [
                'string',
                'required',
            ],
            'user.email' => [
                'email:rfc',
                'required',
                'unique:users,email,' . $this->user->id,
            ],
            'password' => [
                'string',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'roles.*.id' => [
                'integer',
                'exists:roles,id',
            ],
            'user.date_of_birth' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'user.class_id' => [
                'integer',
                'exists:student_classes,id',
                'nullable',
            ],
            'user.country_id' => [
                'integer',
                'exists:countries,id',
                'nullable',
            ],
            'user.locale' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['roles']   = Role::pluck('title', 'id')->toArray();
        $this->listsForFields['class']   = StudentClass::pluck('class_name', 'id')->toArray();
        $this->listsForFields['country'] = Country::pluck('name', 'id')->toArray();
    }
}
