{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('users')" />
<x-backpack::menu-item title="Alumnis" icon="la la-question" :link="backpack_url('alumni')" />
<x-backpack::menu-item title="Employers" icon="la la-question" :link="backpack_url('employers')" />
<x-backpack::menu-item title="Jobs" icon="la la-question" :link="backpack_url('jobs')" />