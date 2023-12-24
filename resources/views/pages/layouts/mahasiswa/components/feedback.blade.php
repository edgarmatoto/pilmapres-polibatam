<section
    id="ulasanModal"
    class="fixed-bottom mb-3"
>
    <div class="container">
        <div class="position-relative">
            <div class="d-flex align-content-stretch rounded-4 overflow-hidden">
                <div
                    style="background-color: #C4C4C4;"
                    class="px-5 py-3 fs-3 z-n1 d-none d-md-block"
                >
                    FeedBack
                </div>
                <input
                    type="text"
                    class="form-control rounded-4 shadow-none border-0 fs-3 text-center z-1"
                    id="ulasanField"
                    placeholder="Ketik Pesan"
                    style="margin-left: -15px;"
                    required
                >
                <button
                    onclick="store(ulasanField.value)"
                    class="px-4 py-3 fs-3 rounded-4 border-0 text-white z-3"
                    type="button"
                    style="
                        background-color: #83E149;
                        margin-left: -50px;
                    "
                >
                    Kirim
                </button>
            </div>
            <button
                type="button"
                class="position-absolute top-0 start-0 translate-middle ms-1 mt-1 border-0 rounded-circle btn btn-danger p-1 z-2"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="#ffffff"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <line
                        x1="18"
                        y1="6"
                        x2="6"
                        y2="18"
                    ></line>
                    <line
                        x1="6"
                        y1="6"
                        x2="18"
                        y2="18"
                    ></line>
                </svg>
            </button>
        </div>
    </div>
</section>

<script>
    function store(value) {
        $.ajax({
            url: "{{ route('mhs.ulasan', ['alternatif' => ulasan()]) }}",
            type: 'POST',
            data: {
                '_token': '{{ csrf_token() }}',
                'ulasan': value
            },
            beforeSend: () => {
                Swal.fire({
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    willOpen: () => Swal.showLoading(),
                });
            },
            success: (response) => {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.success,
                        confirmButtonColor: "#045464"
                    }).then(() => ulasanModal.remove());
                } else if (response.error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: response.error,
                        confirmButtonColor: "#045464"
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Data gagal disimpan, silahkan coba lagi atau hubungi administrator untuk permasalahan ini.',
                        confirmButtonColor: "#045464"
                    });
                }
            },
            error: () => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Data gagal dieksekusi, silahkan coba lagi atau hubungi administrator untuk permasalahan ini.',
                    confirmButtonColor: "#045464"
                });
            }
        });
    }
</script>
