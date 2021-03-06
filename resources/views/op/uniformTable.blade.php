@extends('template.app.user')
@section('content')
    <h3><button class="button btn-sm dark"><i class="fas fa-tshirt"></i></button> Ukuran baju Laki-laki</h3>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Info</th>
                <th>S</th>
                <th>M</th>
                <th>L</th>
                <th>XL</th>
                <th>XXL</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uniforms->where('gender', 'l') as $uni)
                <tr>
                    <td>{{ $uni->id }}</td>
                    <td>{{ $uni->info }}</td>
                    <td>{{ $uni->s }}</td>
                    <td>{{ $uni->m }}</td>
                    <td>{{ $uni->l }}</td>
                    <td>{{ $uni->xl }}</td>
                    <td>{{ $uni->xxl }}</td>
                    <td>
                        <a href="" class="button btn-sm primary"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h3><button class="button btn-sm dark"><i class="fas fa-tshirt"></i></button> Ukuran baju perempuan</h3>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Info</th>
                <th>S</th>
                <th>M</th>
                <th>L</th>
                <th>XL</th>
                <th>XXL</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uniforms->where('gender', 'p') as $uni)
                <tr>
                    <td>{{ $uni->id }}</td>
                    <td>{{ $uni->info }}</td>
                    <td>{{ $uni->s }}</td>
                    <td>{{ $uni->m }}</td>
                    <td>{{ $uni->l }}</td>
                    <td>{{ $uni->xl }}</td>
                    <td>{{ $uni->xxl }}</td>
                    <td>
                        <a href="" class="button btn-sm primary"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                @if ($uni->id == 8)
                    @break
                @endif
            @endforeach
        </tbody>
    </table>
    <h3><button class="button btn-sm dark"><i class="fas fa-tshirt"></i></button> Ukuran baju jilbab</h3>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Info</th>
                <th>S</th>
                <th>M</th>
                <th>L</th>
                <th>XL</th>
                <th>XXL</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uniforms->where('id', '>', 8) as $uni)
                <tr>
                    <td>{{ $uni->id }}</td>
                    <td>{{ $uni->info }}</td>
                    <td>{{ $uni->s }}</td>
                    <td>{{ $uni->m }}</td>
                    <td>{{ $uni->l }}</td>
                    <td>{{ $uni->xl }}</td>
                    <td>{{ $uni->xxl }}</td>
                    <td>
                        <a href="" class="button btn-sm primary"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
