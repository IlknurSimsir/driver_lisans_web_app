@include('layouts.head')

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        @include('component.loading')
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        @include('admin_panel.part.sidebar')
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin_panel.part.navbar')
            <!-- Navbar End -->

            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Eğitmenler</h6>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addModal">
                                <i class="fas fa-plus"></i> Yeni Eğitmen
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="display">
                            <!-- teacher title start -->
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">İsim</th>
                                    <th scope="col">Soyisim</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">E-Mail</th>
                                    <th scope="col">Ders Adı</th>
                                    <th scope="col">Açıklama</th>
                                    <th scope="col">Düzenle</th>
                                    <th scope="col">Sil</th>
                                </tr>
                            </thead>
                            <!-- teacher title end -->
                            <tbody>
                                <!-- teacher content start -->
                                @foreach($teacher as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->surname }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->email }}</td>
                                    @foreach ($lesson as $lessons)
                                    @if ($lessons->id == $data->lesson_id)
                                    <td>{{ $lessons->name }}</td>
                                    @endif
                                    @endforeach
                                    <td>
                                        {{ $data->explanation }}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning edit-btn"
                                            data-id="{{ $data->id }}" data-name="{{ $data->name }}"
                                            data-surname="{{ $data->surname }}" data-phone="{{ $data->phone }}"
                                            data-email="{{ $data->email }}" data-explanation="{{ $data->explanation }}"
                                            data-lesson_id="{{ $data->lesson_id }}" data-bs-toggle="modal"
                                            data-bs-target="#editModal">
                                            Düzenle
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning delete-btn"
                                            data-id="{{ $data->id }}" data-name="{{ $data->name }}"
                                            data-surname="{{ $data->surname }}" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal">
                                            Sil
                                        </button>

                                    </td>
                                </tr>
                                @endforeach

                                <!-- teacher content end-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('admin_panel.part.teacher_part.teacheradd')
            @include('admin_panel.part.teacher_part.teacherupdate')
            @include('admin_panel.part.teacher_part.teacherdelete')
            <!-- Footer Start -->
            @include('admin_panel.part.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        @include('component.backToTop')
    </div>
    <script>
        // table kodu 
        let table = new DataTable('#example', {

        });
    </script>

</body>
@include('layouts.script')

</html>