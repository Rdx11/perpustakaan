<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">{{ $title }}</h4>
                    <a href="{{ route($route) }}" class="btn btn-primary btn-round ml-auto">
                        <i class="fa fa-plus"></i>
                        Tambah Buku
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="{{ $id }}" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                @foreach ($columns as $column)
                                <th>{{ $column }}</th>
                                @endforeach
                                @if (!empty($actions))
                                    <th>Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($fields as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    @foreach($item as $value)
                                        <td>{{ $value }}</td>
                                    @endforeach
                                    @if (!empty($actions))
                                        <td>
                                            <div class="form-button-action">
                                            @foreach ($actions as $action)
                                                @if ($action['type'] === 'edit')
                                                    <a href="{{ route($action['route'], $item[0]) }}" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                @endif
                                                @if ($action['type'] === 'delete')
                                                    <button class="btn btn-link btn-danger"
                                                    data-toggle="tooltip"
                                                    data-target="#modal"
                                                    data-id="{{ $item[0] }}"
                                                    data-resource="books"
                                                    data-original-title="Hapus"
                                                    onclick="handleModal(this)">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                @endif
                                            @endforeach
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ count($columns) + 1 }}" class="text-center">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@once
    @push('script')
    <script>
        $(document).ready(function () {
            $('#{{ $id }}').DataTable({
            })
        });
    </script>
    @endpush
@endonce
