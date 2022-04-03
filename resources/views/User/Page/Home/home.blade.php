@extends('User.master')
<style>
  .home-testimonial-bottom {
    background-color: #f8f8f8;
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    margin-top: 20px;
    margin-bottom: 0px;
    position: relative;
    height: 130px;
    top: 190px
}

.home-testimonial h3 {
    color: var(--orange);
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase
}

.home-testimonial h2 {
    color: white;
    font-size: 28px;
    font-weight: 700
}

.testimonial-inner {
    position: relative;
    top: -174px
}

.testimonial-pos {
    position: relative;
    top: 24px
}

.testimonial-inner .tour-desc {
    border-radius: 5px;
    padding: 40px
}

.color-grey-3 {
    font-family: "Montserrat", Sans-serif;
    font-size: 14px;
    color: #6c83a2
}

.testimonial-inner img.tm-people {
    width: 60px;
    height: 60px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -o-object-fit: cover;
    object-fit: cover;
    max-width: none
}

.link-name {
    font-family: "Montserrat", Sans-serif;
    font-size: 14px;
    color: #6c83a2
}

.link-position {
    font-family: "Montserrat", Sans-serif;
    font-size: 12px;
    color: #6c83a2
}
</style>


@section('content')

<div class="container py-3 bg-white" >
    <img src="http://drive.google.com/uc?export=view&id=1YEMvaFTYusWrjThHEGISvpxN4oUZZ5cx" alt="foto" width="559px" height="70px" style="margin-left:auto; margin-right:auto; display:block; padding-top:24px ">
        <div class="row mt-4 justify-content-center">
          <div class="col d-flex justify-content-center" style="margin-bottom:20px;" >
            <div class="card card-block" style="width: 300px; height:430px; border-radius: 25px; border-solid:1px; border-color:#D77409;">
              <img src="http://drive.google.com/uc?export=view&id=12HjDeFfTn8KY7fKcinR4pxvHugeqG9hg" alt="foto" width="237px" height="235px" style="padding-left:80px; padding-top:48px">
              <div class="card-body">
                <h5 class="card-title" style="font-family: Nunito; font-weight:bold; text-align: center; color:#F58814">ORDER LOAK.IN</h5>
                <p class="card-text" style="font-size:16px; font-family: Nunito; font-weight: 400; text-align: center;">Order Loak.in merupakan fitur utama dari Loak.in. Fitur ini berguna untuk memanggil tukang loak terdekat. Selain itu, fitur ini bisa digunakan kapan saja dan dimana saja</p>
                <a class="btn btn-outline-light" style="background-color:#F58814;font-color:white;width:50%;border-radius:25px 25px 25px 25px; width: 182px; left: 336px; font-family: Nunito; margin-left: 40px" href="">ORDER LOAK.IN</a>
              </div> 
            </div>
          </div> 
    
          <div class="col d-flex justify-content-center" style="margin-bottom:20px;" >
            <div class="card card-block" style="width: 300px; height:430px; border-radius: 25px; border-solid:1px; border-color:#D77409;">
              <img src="http://drive.google.com/uc?export=view&id=1ccVV5FSxeuMvm9WxooFvxQqrOs1CTAGm" alt="foto" width="237px" height="235px" style="padding-left:80px; padding-top:48px">
              <div class="card-body">
                <h5 class="card-title" style="font-family: Nunito; font-weight:bold; text-align: center; color:#F58814">LOAK.IN SHOP</h5>
                <p class="card-text" style="font-size:16px; font-family: Nunito; font-weight: 400; text-align: center;">Loak.in Shop merupakan fitur yang berguna untuk pembelian dan penjualan barang bekas yang masih layak pakai ataupun hasil daur ulang barang bekas.</p>
                <a class="btn btn-outline-light" style="background-color:#F58814;font-color:white;width:50%;border-radius:25px 25px 25px 25px; width: 182px; left: 336px; font-family: Nunito; margin-left: 40px" href="">SHOP NOW</a>
              </div> 
            </div>
          </div> 
        </div>
</div>
    
    <div class="container py-3 bg-white mt-3" >
        <h3 style="font-family: 'Nunito'; font-style: normal; font-weight:bolder; color:#D77409; text-align:center;">ABOUT US</h3>
        <div class="row mt-3">
          <div class="col justify-content-center">
            <img src="http://drive.google.com/uc?export=view&id=1n12_GxmVPOxNhzFLoIvty1NkP7ru8BAx" alt="Foto" width="408px" height="206px" style="margin-left:auto; margin-right:auto; display:block; padding-top:24px ">
          </div>  
        </div>
        <div class="row">
          <div class="col-sm justify-content-center" style="font-family: 'Nunito'; font-style: normal; font-weight: 400; font-size: 18px; line-height: 29px; margin-top:20px; text-align:center;">
            <p>LOAK.IN merupakan sebuah aplikasi mobile untuk memanggil tukang loak untuk menjual barang bekas. Selain itu, aplikasi LOAK.IN ini juga menyediakan suatu fitur untuk membeli barang bekas yang sudah di daur ulang. Aplikasi ini diciptakan dengan melihat keadaan masyarakat yang sulit untuk menemukan tukang loak dan menyalurkan barang bekas agar dapat didaur ulang.</p>
          </div>
        </div>
    </div>

    <div class="container py-3 bg-white mt-3" >
      <h3 style="font-family: 'Nunito'; font-style: normal; font-weight:bolder; color:#D77409; text-align:center;">WHAT THEY SAID ABOUT US?</h3>

      <div class="row mt-5 pt-3 justify-content-center">

        <div class="col d-flex justify-content-center" style="margin-bottom:20px;" >
          <div class="card card-block" style="width: 300px; height:400px; border-radius: 25px; border-solid:3px; border-color:#D77409;">
            <img src="http://drive.google.com/uc?export=view&id=1GyLd_49s_kqwl48me23PSMS0EmaKv6Df" alt="foto" width="230px" height="150px" style="padding-left:80px; margin-top:20px">
            <div class="card-body">
              <h5 class="card-title" style="font-family: Nunito; font-weight:600; text-align: center; color: black; font-size:19px">Revya Qwentya H</h5>
              <h6 class="card-title" style="font-family: Nunito; font-weight:light; text-align: center; font-size:14px; color:black">Mahasiswa</h6>
              <p class="card-text" style="font-size:16px; font-family: Nunito; font-weight: 400; text-align: center; padding-top:20px;">Berguna banget deh pokoknya buat mahasiswa sepertiku yang pengen jual buku-buku lama baiknya emang di loakin aja!</p>
             </div> 
          </div>
        </div> 

        <div class="col d-flex justify-content-center" style="margin-bottom:20px;" >
          <div class="card card-block" style="width: 300px; height:400px; border-radius: 25px; border-solid:3px; border-color:#D77409;">
            <img src="http://drive.google.com/uc?export=view&id=1_5d4cJcOraXUAkBCRAylDfuPhG4IjrJG" alt="foto" width="230px" height="150px" style="padding-left:80px; margin-top:20px">
            <div class="card-body">
              <h5 class="card-title" style="font-family: Nunito; font-weight:600; text-align: center; color: black; font-size:19px">Antonio Dhika R</h5>
              <h6 class="card-title" style="font-family: Nunito; font-weight:light; text-align: center; font-size:14px; color:black">Pekerja</h6>
              <p class="card-text" style="font-size:16px; font-family: Nunito; font-weight: 400; text-align: center; padding-top:20px;">Suka banget sama loakin, dengan menjual barang bekas kita bisa dapet cuan. Caranya mudah banget, top deh!</p>
             </div> 
          </div>
        </div> 

        <div class="col d-flex justify-content-center" style="margin-bottom:20px;" >
          <div class="card card-block" style="width: 300px; height:400px; border-radius: 25px; border-solid:3px; border-color:#D77409;">
            <img src="http://drive.google.com/uc?export=view&id=1xpo07Ad7agNOVqWrksOLdy5mewYuaQx1" alt="foto" width="230px" height="150px" style="padding-left:80px; margin-top:20px">
            <div class="card-body">
              <h5 class="card-title" style="font-family: Nunito; font-weight:600; text-align: center; color: black; font-size:19px">Sarah Kathrine L</h5>
              <h6 class="card-title" style="font-family: Nunito; font-weight:light; text-align: center; font-size:14px; color:black">Ibu Rumah Tangga</h6>
              <p class="card-text" style="font-size:16px; font-family: Nunito; font-weight: 400; text-align: center; padding-top:20px;">Aplikasi yang sangat berguna bagi ibu rumah tangga seperti saya. Memudahkan sekali untuk memanggil tukang loak, tinggal tunggu dirumah aja. Keren.</p>
             </div> 
          </div>
        </div> 

      </div>
    </div>

@endsection