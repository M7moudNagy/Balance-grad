<h1>DOCTOR DASHBOARD</h1>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <a :href="route('logout')"
       onclick="event.preventDefault();
       this.closest('form').submit();">logout</a>
</form>
