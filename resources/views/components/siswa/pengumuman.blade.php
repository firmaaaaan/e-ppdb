<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengumuman Kelulusan</title>
    <link rel="stylesheet" href="app.css" />
  </head>
  <body class="bg-gray-700 m-12">
    <button class="download-pdf bg-[#0099ff] py-2 px-4 rounded-lg text-white">Download</button>
    <div class="skl-wrapper w-2/3 mx-auto">
      <div class="kelulusan" id="kelulusan">
        <div class="wrapper bg-white p-8 relative">
          <img src="{{ asset('logo.jpg') }}" alt="watermark" class="absolute left-[9rem] top-[15rem] w-[480px] opacity-10" />
          <div class="header flex justify-start items-center border-b-2 border-double border-gray-800 relative z-50">
            <div class="title text-center w-full font-bold text-xl">
              <h1>PEMERINTAH DAERAH PROVINSI JAWA BARAT</h1>
              <h2>DINAS PENDIDIKAN</h2>
              <h3>CABANG DINAS PENDIDIKAN WILAYAH IV</h3>
              <h4 class="text-2xl">SMA NEGERI 1 RAWAMERTA</h4>
              <p class="font-normal text-base">Jl. Garunggung - Panyingkiran Kec. Rawamerta Kab. Karawang, 41382</p>
              <p class="font-normal text-base">Email : sman1rwt@gmail.com Website : https://sman1rawamerta.sch.id</p>
            </div>
          </div>
          <div class="title w-full flex justify-center items-center flex-col my-8 relative z-50">
            <h2 class="text-xl font-bold border-b-2 border-gray-800">PENGUMUMAN KELULUSAN</h2>
          </div>
          <div class="body-wrapper mx-[2cm] relative z-50">
            <p class="text-justify">Kepala SMA Negeri 1 Rawamerta Selaku Ketua Penyelenggara Ujian Sekolah Tahun Pelajaran 2021/2022 berdasarkan :</p>
            <ol class="list-decimal ml-4 mt-4">
              <li class="text-justify">Ketuntasan dari seluruh program pembelajaran pada kurikulum 2013;</li>
              <li class="text-justify">Kriteria kelulusan dari satuan pendidikan sesuai dengan Kurikulum Tingkat Satuan Pendidikan dan peraturan perundang-undangan serta;</li>
              <li class="text-justify">Rapat Pleno Dewan Pendidik tentang Kelulusan pada tanggal 28 April 2022;</li>
            </ol>
            <p>menerangkan bahwa :</p>
            <div class="data my-4 mx-8">
              <div class="data-group flex">
                <div class="data-label w-2/6">Nama</div>
                <div class="data-value">: <span class="font-bold nama"></span></div>
              </div>
              <div class="data-group flex">
                <div class="data-label w-2/6">Tempat, tanggal lahir</div>
                <div class="data-value">: <span class="tempat_lahir"></span>, <span class="tanggal_lahir"></span></div>
              </div>
              <div class="data-group flex">
                <div class="data-label w-2/6">NIS / NISN</div>
                <div class="data-value">: <span class="nis"></span> / <span class="nisn"></span></div>
              </div>
              <div class="data-group flex">
                <div class="data-label w-2/6">Peminatan</div>
                <div class="data-value">: <span class="jurusan"></span></div>
              </div>
              <div class="data-group flex">
                <div class="data-label w-2/6">Dinyatakan</div>
                <div class="data-value">: <span class="font-bold text-xl">LULUS</span></div>
              </div>
            </div>
            <p class="text-justify">Demikian pengumuman ini dibuat untuk diketahui sebagaimana mestinya.</p>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>
    <script>
      const bulan = {
        "01": "Januari",
        "02": "Februari",
        "03": "Maret",
        "04": "April",
        "05": "Mei",
        "06": "Juni",
        "07": "Juli",
        "08": "Agustus",
        "09": "September",
        10: "Oktober",
        11: "November",
        12: "Desember",
      };
      // Fetch data kelulusan
      const api_url = "https://alumni.sman1rawamerta.sch.id/api/kelulusan/0050892213";
      fetch(api_url, {
        method: "GET",
        headers: {
          "Content-Type": "application/json",
        },
      })
        .then(function (response) {
          if (response.status === 200) {
            response.json().then(function (data) {
              document.querySelector(".nama").innerHTML = data.biodata.nama;
              document.querySelector(".tempat_lahir").innerHTML = data.biodata.tempat_lahir;

              // Convert Tanggal lahir
              let hari = String(data.biodata.tanggal_lahir).substr(8, 2);
              let bulanLahir = String(data.biodata.tanggal_lahir).substr(5, 2);
              let keys = Object.keys(bulan);
              for (let i = 0; i < keys.length; i++) {
                if (bulanLahir === keys[i]) {
                  bulanLahir = bulan[keys[i]];
                }
              }
              let tahun = String(data.biodata.tanggal_lahir).substr(0, 4);
              document.querySelector(".tanggal_lahir").innerHTML = hari + " " + bulanLahir + " " + tahun;
              document.querySelector(".nis").innerHTML = data.biodata.nis;
              document.querySelector(".nisn").innerHTML = data.biodata.nisn;
              document.querySelector(".jurusan").innerHTML = data.biodata.kelas.substr(3, 3).toUpperCase();
            });
          } else {
            alert("Data tidak ditemukan");
          }
        })
        .catch(function (error) {
          console.log("Error: " + error);
        });

      // Download PDF
      document.querySelector(".download-pdf").addEventListener("click", () => {
        const element = document.getElementById("kelulusan");
        const option = {
          filename: "pengumuman-kelulusan.pdf",
          image: { type: "jpeg", quality: 0.98 },
          html2canvas: { scale: 3 },
          jsPDF: { unit: "in", format: "A4", orientation: "portrait" },
        };
        html2pdf().set(option).from(element).save();
      });
    </script>
  </body>
</html>
