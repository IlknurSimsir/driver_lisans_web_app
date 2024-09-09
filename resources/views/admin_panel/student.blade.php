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
                        <h6 class="mb-0">Öğrenciler</h6>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addModal">
                                <i class="fas fa-plus"></i> Yeni Öğrenci
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="display">
                            <!-- announcement title start -->
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">İsim</th>
                                    <th scope="col">Soyisim</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">E-Mail</th>
                                    <th scope="col">Ehliyet Tipi</th>
                                    <th scope="col">Kurs Durumu</th>
                                    <th scope="col">Düzenle</th>
                                    <th scope="col">Sil</th>
                                </tr>
                            </thead>
                            <!-- announcement title end -->
                            <tbody>
                                <!-- announcement content start -->


                                @foreach ($student as $data)
                                @php
                                $statusClass = '';
                                switch ($data->course_status) {
                                case 1:
                                $statusClass = 'bg-started';
                                break;
                                case 2:
                                $statusClass = 'bg-completed';
                                break;
                                case 3:
                                $statusClass = 'bg-failed-exam';
                                break;
                                case 4:
                                $statusClass = 'bg-failed-driving';
                                break;
                                case 5:
                                $statusClass = 'bg-failed-attendance';
                                break;
                                }
                                @endphp
                                <tr class="{{ $statusClass }}">
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->surname }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->email }}</td>
                                    @foreach ($license as $licenses)
                                    @if ($licenses->id == $data->license_type)
                                    <td>
                                        {{ $licenses->type }}
                                    </td>
                                    @endif
                                    @endforeach
                                    @foreach ($course as $courses)
                                    @if ($courses->id == $data->course_status)
                                    <td>{{ $courses->status }}</td>
                                    @endif
                                    @endforeach
                                    <td>
                                        <button type="button" class="btn btn-warning edit-btn"
                                            data-id="{{ $data->id }}" data-name="{{ $data->name }}"
                                            data-surname="{{ $data->surname }}" data-phone="{{ $data->phone }}"
                                            data-email="{{ $data->email }}" data-password="{{ $data->password }}"
                                            data-class_id="{{ $data->class_id }}"
                                            data-license_type="{{ $data->license_type }}"
                                            data-course_status="{{ $data->course_status }}" data-bs-toggle="modal"
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


                                <!-- announcement content end-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('admin_panel.part.student_part.studentadd')
            @include('admin_panel.part.student_part.studentupdate')
            @include('admin_panel.part.student_part.studentdelete')
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