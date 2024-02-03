<div class="modal fade" id="power-arena" tabindex="-1" aria-labelledby="power-arena" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-3" id="power-arena">[MAJOR] Boss Drop</h3>
            </div>
            <div class="modal-body">
                <table class="table table-bordered justify-content-center">
                    @php
                        $majorboss = storage_path('guide/majorboss/majorboss.txt');
                        $majorbossdrop = storage_path('guide/majorboss/drop.txt');

                        // Membaca setiap baris dari file dan menampilkannya
                        $lines = file($majorboss, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                        $lines2 = file($majorbossdrop, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    @endphp
                    <thead>
                        <tr class="text-center">
                            <th>
                                #
                            </th>
                            <th>
                                Boss Name
                            </th>
                            <th>
                                Item Drop
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lines as $index => $line)
                            <tr>
                                <td class="text-center">
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $line }}
                                </td>
                                @if ($index === 0)
                                    <td class="text-center" rowspan="{{ count($lines) }}">
                                        @foreach ($lines2 as $line2)
                                            <ul class="h3">{{ $line2 }}</ul>
                                        @endforeach
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
