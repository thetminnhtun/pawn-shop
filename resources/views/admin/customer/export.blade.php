<table>
    <thead>
        <tr>
            <th rowspan="2">စဥ္</th>
            <th rowspan="2">ပစၥည္းအမ်ိဳးအမည္</th>
            <th colspan="3">ေက်ာက္ပါအေလးခ်ိန္</th>
            <th rowspan="2">ထုတ္ေခ်းေသာေငြရင္း</th>
            <th rowspan="2">ေပါင္သူအမည္</th>
            <th rowspan="2">ေနရပ္လိပ္စာ</th>
            <th rowspan="2">ေန႔စြဲ</th>
        </tr>
        <tr>
            <th>က်ပ္</th>
            <th>ပဲ</th>
            <th>ေရြး</th>
        </tr>
    </thead>
    <tbody>
        <?php $num = 1; ?>
        @foreach($customers as $customer)
        <tr>
            <th>
                {{$num++}}
            </th>
            <td>
                {{$customer->category}}
            </td>
            <td>
                {{$customer->kyat}}
            </td>
            <td>
                {{$customer->pae}}
            </td>
            <td>
                {{$customer->yway}}
            </td>
            <td>
                {{$customer->loan}}
            </td>
            <td>
                {{$customer->customer_name}}
            </td>
            <td>
                {{$customer->customer_address}}
            </td>
            <td>
                {{$customer->created_at}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>