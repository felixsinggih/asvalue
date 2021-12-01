<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
<img src="{{ asset('assets/frontend-ui/didadidu.png') }}" class="logo" alt="{{ config('app.name') }}" style="width: 230px">
@endif
</a>
</td>
</tr>
