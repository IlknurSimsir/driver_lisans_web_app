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
                        <h6 class="mb-0">Sınıflar</h6>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addModal">
                                <i class="fas fa-plus"></i> Yeni Sınıf
                            </button>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="display">
                            <!-- Lesson title start -->
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">İsim</th>
                                    <th scope="col">Dönem</th>
                                    <th scope="col">Ders Hocası</th>
                                    <th scope="col">Mevcut</th>
                                    <th scope="col">Başlama Tarihi</th>
                                    <th scope="col">Düzenle</th>
                                </tr>
                            </thead>
                            <!-- Lesson title end -->
                            <tbody>
                                <!-- Lesson content start -->
                                @foreach ($class as $data)
                                <tr class="textStart">
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->term }}</td>
                                    @foreach($teacherclass as $teacherclasses)
                                    @if($teacherclasses->class_id ==$data->id)
                                    @foreach($teacher as $teachers)
                                    @if($teachers->id == $teacherclasses->teacher_id )
                                    <td>{{ $teachers->name }} {{ $teachers->surname }}</td>
                                    @endif
                                    @endforeach
                                    @endif
                                    @endforeach
                                    <td>{{ $data->class_size }}</td>
                                    <td>{{ $data->start_date }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning edit-btn"
                                            data-id="{{ $data->id }}" data-name="{{ $data->name }}"
                                            data-term="{{ $data->term }}" data-class_size="{{ $data->class_size }}"
                                            data-lesson_teacher_id="{{ $data->lesson_teacher_id }}"
                                            data-start_date="{{ $data->start_date }}" data-bs-toggle="modal"
                                            data-bs-target="#editModal">
                                            Düzenle
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- Lesson content end-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script>
                // table kodu 
                let table = new DataTable('#example', {});
            </script>
            <!-- Add Modal Start -->
            @include('admin_panel.part.class_part.classadd')
            <!-- Add Modal End -->

            <!-- Edit Modal Start -->
            @include('admin_panel.part.class_part.classupdate')
            <!-- Edit Modal End -->

            <!-- Footer Start -->
            @include('admin_panel.part.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        @include('component.backToTop')
    </div>

</body>
@include('layouts.script')