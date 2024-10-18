<div class="flex bg-gray-800 text-white top-0 py-3 flex-wrap justify-around bg-silver">
    <div class="flex flex-col items-center"> <!-- Tambahkan elemen ini untuk mengatur posisi -->
        <h1 class="text-lg font-semibold">Cash Note Manager</h1>
        <p class="text-sm">by Wahyu Jum'ah Maulidan</p> <!-- Deskripsi di bawah judul -->
    </div>
    <ul class="flex gap-[40px] text-m">
        <li><a href="/homepage">Homepage</a></li>
        <li>
            <a href="/contact">Contact</a>
        </li>
        <li>
            <button type="button" onclick="function3()" class="">
                Logout
            </button>
        </li>
    </ul>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script language="JavaScript">
    function function3() {
        swal({
                title: "Are you sure want to logout?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Logout success", {
                        icon: "success",
                    });
                    setTimeout(() => {
                        window.location.href = "/";
                    }, 1500);
                }
            });
    }
</script>
