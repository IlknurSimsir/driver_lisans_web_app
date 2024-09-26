        <x-title-card-component title="BİZE ULAŞIN" />

        <div class="row text-center mt-3">
            <form action="{{route('reachUsEmail')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="mb-3">

                            <input type="text" class="form-control" id="addName" name="name" placeholder="Adınız"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="mb-3">

                            <input type="text" class="form-control" id="addSurame" name="surname"
                                placeholder="Soyadınız" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="mb-3">

                            <input type="text" class="form-control" id="addPhone" name="phone"
                                placeholder="Telefonunuz" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="addMail" name="mail"
                                placeholder="E-posta Adresiniz" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="mb-3">
                        <textarea name="getInfo" class="form-control" rows="4" id="getInfo"
                            placeholder="Bilgi almak istediğiniz konu ..."></textarea>
                    </div>
                </div>

                <button class="btn btn-success w-50">Gönder</button>
            </form>
        </div>