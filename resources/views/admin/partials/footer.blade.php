<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        @if(config('admin.show_environment'))
            <strong>Env</strong>&nbsp;&nbsp; {!! config('app.env') !!}
        @endif
    </div>
    <!-- Default to the left -->
    <strong>Powered by <a>Alberich Tech</a></strong>
</footer>