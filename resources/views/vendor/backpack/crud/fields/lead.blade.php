<!-- lead -->
<div @include('crud::inc.field_wrapper_attributes') >
    <table class="table">
        <tbody>
        <tr>
            <td>Имя</td>
            <td>{{ $entry->lead['name'] }}</td>
        </tr>
        <tr>
            <td>Телефон</td>
            <td>{{ $entry->lead['phone'] }}</td>
        </tr>
        <tr>
            <td>email</td>
            <td>{{ $entry->lead['email'] }}</td>
        </tr>
        <tr>
            <td>Адресс</td>
            <td>{{ $entry->lead['address'] }}</td>
        </tr>
        <tr>
            <td>Способ оплаты</td>
            <td>{{ $entry->lead['payment'] }}</td>
        </tr>
        </tbody>
    </table>
</div>