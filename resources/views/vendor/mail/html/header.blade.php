<!-- @props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('images/logo.png') }}" alt="Ally VA - Virtual Assistant Services logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr> -->

<tr>
    <td class="header" style="text-align: center; padding: 25px;">
        <a href="{{ config('app.url') }}">
            <img src="https://allyva.com/logo.png" alt="Allyva" style="height: 50px;">
        </a>
    </td>
</tr>