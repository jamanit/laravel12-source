@extends('dashboard.layouts.main')
@push('title', 'Edit Permissions')

@section('content')
    <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
        <x-breadcrumb title="Edit Permissions" :items="[['name' => 'Dashboard', 'url' => route('dashboard')], ['name' => 'Permissions', 'url' => route('permissions.index')], ['name' => 'Edit Permissions']]" />

        <div class="space-y-5 sm:space-y-6">
            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="p-5 border-t border-gray-100 dark:border-gray-800 sm:p-6">
                    <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 spcace-y-4">
                            <x-form.select name="guard_name" label="Guard Name" :options="['web' => 'web', 'api' => 'api']" :selected="old('guard_name', $permission->guard_name)" />
                            <x-form.input name="name" label="Name" placeholder="Enter name" value="{{ old('name', $permission->name) }}" />
                        </div>

                        <div class="mt-8">
                            <x-form.button label="Save Changes" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
