<?= $this->extend('layout/templateUser'); ?>

<?= $this->section('content'); ?>

<div class="baground">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="logo">
                        <img src="/img/cilacap.png" class="rounded float-start mt-4" width="80px">
                    </div>

                    <h1 class="mt-5 mb-5 ml-3" style="font-family: sans-serif; font-weight:bold">Selamat Datang di Website Desa Madusari</h1>
                </div>

                <h6 style="font-size: 40px; font-family: verdana; text-align: right; font-weight:bold" id="jam" class="mr-5"></h6>

                <ul class="slideshow">
                    <li><span></span></li>
                    <li><span>2</span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                </ul>



                <!-- <script type="text/javascript">
                    window.onload = function() {
                        jam();
                    }

                    function jam() {
                        var e = document.getElementById('jam'),
                            d = new Date(),
                            h, m, s;
                        h = d.getHours();
                        m = set(d.getMinutes());
                        s = set(d.getSeconds());

                        e.innerHTML = h + ':' + m + ':' + s;

                        setTimeout('jam()', 1000);
                    }

                    function set(e) {
                        e = e < 10 ? '0' + e : e;
                        return e;
                    }
                </script> -->

            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>