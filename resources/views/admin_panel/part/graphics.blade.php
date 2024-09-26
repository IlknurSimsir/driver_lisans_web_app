<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Kurum Verileri</h6>

                </div>
                <canvas id="worldwide-sales"></canvas>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Öğrenci Durumları </h6>
                </div>
                <canvas id="salse-revenue"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    $(document).ready(function() {
        // PHP'den gelen verileri JavaScript'e dönüştürelim
        var chartData = @json($chartData);

        var years = [];
        var studentData = [];
        var teacherData = [];
        var vehicleData = [];

        chartData.forEach(function(item) {
            years.push(item.updated_at);
            studentData.push(item.student_number);
            teacherData.push(item.teacher_number);
            vehicleData.push(item.vehicle_number);
        });

        var ctx1 = $("#worldwide-sales").get(0).getContext("2d");
        var myChart1 = new Chart(ctx1, {
            type: "bar",
            data: {
                labels: years, // Düzenleme tarihi
                datasets: [{
                        label: "Öğrenci Sayısı",
                        data: studentData, // Öğrenci sayısı verisi
                        backgroundColor: "rgba(0, 156, 255, .7)"
                    },
                    {
                        label: "Öğretmen Sayısı",
                        data: teacherData, // Öğretmen sayısı verisi
                        backgroundColor: "rgba(0, 156, 255, .5)"
                    },
                    {
                        label: "Araç Sayısı",
                        data: vehicleData, // Araç sayısı verisi
                        backgroundColor: "rgba(0, 156, 255, .3)"
                    }
                ]
            },
            options: {
                responsive: true
            }
        });
    });
    $(document).ready(function() {
        // PHP'den gelen verileri JavaScript'e dönüştürelim
        var studentStatusData = @json($studentStatusData);

        var durumlar = [];
        var durumSayilari = [];

        // Durumları ve öğrenci sayılarını JavaScript dizilerine aktaralım
        studentStatusData.forEach(function(item) {
            durumlar.push(item.course_status); // Durumlar (geçti, kaldı vb.)
            durumSayilari.push(item.count); // Her durumdaki öğrenci sayısı
        });

        var ctx2 = $("#salse-revenue").get(0).getContext("2d");
        var myChart2 = new Chart(ctx2, {
            type: "line", // İstersen başka tip de kullanabilirsin, örneğin 'bar'
            data: {
                labels: durumlar, // Durumlar grafikte gösterilecek
                datasets: [{
                    label: "Öğrenci Durumları",
                    data: durumSayilari, // Öğrenci sayıları
                    backgroundColor: "rgba(0, 156, 255, .5)",
                    fill: true
                }]
            },
            options: {
                responsive: true
            }
        });
    });
</script>
