<footer class="site-footer">
    
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      
        <div class="container">
            
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                      <div class="footer-widget-heading">
                        <h2>Về chúng tôi</h2>
                    </div>
                      {{-- <div class="site-footer__about-text">Our history Solar Energy was established in 2001 as a
                          small family business with the simple mission of helping environment.</div> --}}
                      <ul class="footer-contact__list">
                          <li><span class="icon icon-location"></span>1295B Nguyễn Thị Định, Phường Cát Lái, Tp Thủ Đức, Thành phố Hồ Chí Minh</li>
                          <li><span class="icon icon-email"></span>dichvukythuat@saigonnewport.com.vn</li>
                          <li><span class="icon icon-phone"></span>(028). 3742 0177</li>
                      </ul>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h2>Giới Thiệu</h2>
                            </div>
                            <ul>
                              <li><a href="#">Giới thiệu</a></li>
                              <li><a href="#">Dịch vụ</a></li>
                              <li><a href="#">Dự án</a></li>
                              <li><a href="#">Phương tiện</a></li>
                              <li><a href="#">Khách hàng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                      <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h2>Dịch vụ</h2>
                        </div>
                        <ul>
                          <li><a href="#">Giới thiệu</a></li>
                          <li><a href="#">Dịch vụ</a></li>
                          <li><a href="#">Dự án</a></li>
                          <li><a href="#">Phương tiện</a></li>
                          <li><a href="#">Khách hàng</a></li>
                            
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2023, All Right Reserved <a href="https://codepen.io/anupkumar92/">DVKT Tân Cảng</a></p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div> --}}
        <footer class="footer">
          <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
          </div>
          <p>Copyright &copy; 2023, All Right Reserved DVKT Tân Cảng</a></p>
          
        </footer>
</footer>

<style>
   ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #151414;
  position: relative;
}
.footer-cta {
  border-bottom: 1px solid #080808;
}
.single-cta i {
  color: #020202;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}


.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: #000000;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #020202;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #000000;
  line-height: 28px;
}

.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #ffffff;
}
.footer-widget-heading h2 {
  color: #050505;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h2::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #0f0f0f;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: #ffffff;
}
.footer-widget ul li a {
  color: #000000;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #202020;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #000000;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #ff5e14;
}
.footer-menu li a {
  font-size: 14px;
  color: #000000;
}

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

/* * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
} */

/* body {
  display: flex;
  background: #333;
  justify-content: flex-end;
  align-items: flex-end;
  min-height: 100vh;
} */

.footer {
  position: relative;
  width: 100%;
  background: #3586ff;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #000000;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://i.ibb.co/wQZVxxk/wave.png");
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

</style>
