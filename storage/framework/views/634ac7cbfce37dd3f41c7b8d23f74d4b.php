



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style_login.css')); ?>" />
    <link
      href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk&family=Koulen&family=Kumbh+Sans:wght@100&family=McLaren&family=Montserrat:wght@500;600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
  </head>
  <body>
    <?php if (isset($component)) { $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-session-status','data' => ['class' => 'mb-4','status' => session('status')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $attributes = $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $component = $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>
    <main>
      <img src="Asset/Pesawat.png" alt="" class="image" />
      <span class="gradient-light"></span>

      <div class="container form-container">
        <div class="wrapper container">
          <div class="sign-in">
            <h1>Sign In</h1>
            <p>
              If you don't have an account register <br />
              You can <a href="register.html">Register Here !</a>
            </p>
          </div>
          <form method="POST" action="<?php echo e(route('login')); ?>">

          <?php echo csrf_field(); ?> 
          
            <label for="email">Email</label>
            <div class="input-area">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="17"
                height="17"
                viewBox="0 0 17 17"
                fill="none"
              >
                <path
                  d="M1.49414 2.67648H15.5059C16.3297 2.67648 17 3.34675 17 4.17062V12.8294C17 13.6533 16.3297 14.3235 15.5059 14.3235H1.49414C0.670271 14.3235 0 13.6533 0 12.8294V4.17062C0 3.34675 0.670271 2.67648 1.49414 2.67648ZM1.68914 3.67258L1.88856 3.83863L7.90719 8.85034C8.25071 9.13635 8.74936 9.13635 9.09281 8.85034L15.1114 3.83863L15.3109 3.67258H1.68914ZM16.0039 4.39169L11.1001 8.47511L16.0039 11.7387V4.39169ZM1.49414 13.3274H15.5059C15.7465 13.3274 15.9478 13.1559 15.9939 12.9286L10.3014 9.14014L9.73018 9.6158C9.37377 9.91257 8.93685 10.061 8.49997 10.061C8.06308 10.061 7.62619 9.91257 7.26976 9.6158L6.69853 9.14014L1.00605 12.9286C1.05221 13.1559 1.25348 13.3274 1.49414 13.3274ZM0.996094 11.7387L5.89993 8.47514L0.996094 4.39169V11.7387Z"
                  fill="white"
                />
              </svg>
              <input 
                type="email"
                name="email"
                id="email"
                placeholder="Enter your Email Address"
                required
              />
            </div>

            <label for="Password">Password</label>
            <div class="input-area">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="17"
                height="17"
                viewBox="0 0 17 17"
                fill="none"
              >
                <path
                  d="M13.0032 7.2296V4.53742C13.0104 3.31927 12.5239 2.14798 11.6553 1.29383C10.8156 0.457706 9.71638 0 8.5523 0C8.53428 0 8.51265 0 8.49463 0C6.01149 0.00360399 3.99325 2.03625 3.99325 4.53742V7.2296C3.05622 7.34132 2.37146 8.12699 2.37146 9.07844V15.1259C2.37146 16.1531 3.19317 17 4.2203 17H12.7798C13.8069 17 14.6286 16.1531 14.6286 15.1259V9.07844C14.625 8.13059 13.9403 7.34132 13.0032 7.2296ZM4.71045 4.53742H4.71405C4.71405 2.43269 6.41153 0.709985 8.49824 0.709985H8.50184C9.49294 0.706381 10.4444 1.09922 11.1472 1.79839C11.8788 2.52279 12.286 3.51028 12.2788 4.53742V7.2332H11.4859V4.53742C11.4931 3.71931 11.1688 2.93364 10.5885 2.35701C10.0407 1.8092 9.29832 1.49926 8.52346 1.49926H8.50184C6.84401 1.49926 5.50332 2.86156 5.50332 4.53381V7.2332H4.71045V4.53742ZM10.7687 4.53742V7.2332H6.22772V4.53742C6.22772 3.26161 7.24405 2.22366 8.50544 2.22366H8.52707C9.11091 2.22366 9.67313 2.45792 10.0876 2.87238C10.5273 3.31206 10.776 3.91393 10.7687 4.53742ZM13.9403 15.1367C13.9403 15.7674 13.4285 16.2792 12.7978 16.2792H4.23472C3.60402 16.2792 3.09226 15.7674 3.09226 15.1367V9.09646C3.09226 8.46576 3.60402 7.954 4.23472 7.954H12.7978C13.4285 7.954 13.9403 8.46576 13.9403 9.09646V15.1367Z"
                  fill="white"
                />
                <path
                  d="M9.74516 11.8932C9.58659 11.3345 9.07843 10.9525 8.49818 10.9525C7.78099 10.9525 7.19714 11.5328 7.19714 12.2536C7.19714 12.8338 7.57917 13.342 8.13778 13.5005V14.5096C8.13778 14.7079 8.29996 14.87 8.49818 14.87C8.6964 14.87 8.85858 14.7079 8.85858 14.5096V13.5005C9.54694 13.3023 9.94699 12.5815 9.74516 11.8932ZM8.49818 12.8302C8.17743 12.8302 7.91794 12.5707 7.91794 12.2499C7.91794 11.9292 8.17743 11.6697 8.49818 11.6697C8.81894 11.6697 9.07842 11.9292 9.07842 12.2499C9.07842 12.5707 8.81894 12.8302 8.49818 12.8302Z"
                  fill="white"
                />
              </svg>
              <input
                type="password"
                name="password"
                id="password"
                placeholder="Enter your Password"
                required
              />
              <img src="icon/eyes_closed.png" class="pass-visibility" alt="" />
            </div>

            <a href="" class="forgot-password">Forgot Password?</a>
            <label for="remember">
              <input
                type="checkbox"
                id="remember"
                name="remember"
                class="rememberme"
              />
              Remember me
            </label>

            <button type="submit" class="submit-btn">Login</button>
          </form>
          <div class="continuewith">or continue with</div>

          <div class="medsos">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="42"
              height="43"
              viewBox="0 0 42 43"
              fill="none"
            >
              <a
                href="https://www.facebook.com/campaign/landing.php?campaign_id=1654852700&extra_1=s%7Cc%7C318683836444%7Ce%7Cfacebook%20login%7C&placement=&creative=318683836444&keyword=facebook%20login&partner_id=googlesem&extra_2=campaignid%3D1654852700%26adgroupid%3D63261960853%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-1409285535%26loc_physical_ms%3D9125367%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQiA2eKtBhDcARIsAEGTG409d405IfqCOxI56ks8jOhy0Awv8vIYrCPfGqHBV3PjpPA6ZROD80caAkLoEALw_wcB"
              >
                <ellipse
                  cx="20.7286"
                  cy="19.7286"
                  rx="18.1376"
                  ry="18.1376"
                  fill="url(#paint0_linear_488_706)"
                />
                <path
                  d="M27.4831 26.9339L28.2888 21.8146H23.2487V18.494C23.2487 17.0931 23.9514 15.7268 26.2089 15.7268H28.5018V11.3685C28.5018 11.3685 26.4218 11.0226 24.4342 11.0226C20.2814 11.0226 17.5696 13.475 17.5696 17.9129V21.8146H12.9553V26.9339H17.5696V39.3101C18.496 39.4519 19.4437 39.5245 20.4091 39.5245C21.3746 39.5245 22.3223 39.4519 23.2487 39.3101V26.9339H27.4831Z"
                  fill="white"
                />
              </a>

              <defs>
                <linearGradient
                  id="paint0_linear_488_706"
                  x1="20.7286"
                  y1="1.59109"
                  x2="20.7286"
                  y2="37.7586"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#18ACFE" />
                  <stop offset="1" stop-color="#0163E0" />
                </linearGradient>
              </defs>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="42"
              height="42"
              viewBox="0 0 42 42"
              fill="none"
            >
              <a
                href="https://accounts.google.com/v3/signin/identifier?hl=in&ifkv=ASKXGp1IzNDlcVq-izHjk1EzR_sYIjdv34Nts4CXrQDBiDFBBhEu4SCCXAbyErS2OKuDcw7ASlt6Tg&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S16829441%3A1706672238830438&theme=glif"
              >
                <path
                  d="M39.4107 21.1315C39.4107 19.6402 39.2872 18.5519 39.02 17.4234H21.6433V24.1543H31.843C31.6375 25.8271 30.527 28.3462 28.0593 30.0389L28.0247 30.2643L33.5189 34.4354L33.8995 34.4727C37.3953 31.3086 39.4107 26.6533 39.4107 21.1315Z"
                  fill="#4285F4"
                />
                <path
                  d="M21.6422 38.8662C26.6392 38.8662 30.8342 37.2539 33.8983 34.4729L28.0581 30.0391C26.4953 31.1072 24.3977 31.8528 21.6422 31.8528C16.748 31.8528 12.5941 28.6889 11.1133 24.3157L10.8963 24.3338L5.18335 28.6667L5.10864 28.8702C8.15209 34.7952 14.4036 38.8662 21.6422 38.8662Z"
                  fill="#34A853"
                />
                <path
                  d="M11.1145 24.3158C10.7238 23.1873 10.4977 21.978 10.4977 20.7286C10.4977 19.479 10.7238 18.2699 11.094 17.1414L11.0836 16.901L5.29911 12.4985L5.10985 12.5868C3.85549 15.0454 3.13574 17.8064 3.13574 20.7286C3.13574 23.6507 3.85549 26.4116 5.10985 28.8703L11.1145 24.3158Z"
                  fill="#FBBC05"
                />
                <path
                  d="M21.6423 9.60422C25.1176 9.60422 27.4618 11.0754 28.7986 12.3048L34.0218 7.30685C30.8139 4.38469 26.6393 2.59108 21.6423 2.59108C14.4036 2.59108 8.15211 6.66192 5.10864 12.5868L11.0928 17.1414C12.5941 12.7683 16.748 9.60422 21.6423 9.60422Z"
                  fill="#EB4335"
                />
              </a>
            </svg>
            <a href="https://appleid.apple.com/sign-in">
              <img src="Asset/apple.png" alt="" />
            </a>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>

<?php /**PATH D:\TPM\Gruppppp-master\resources\views/auth/login.blade.php ENDPATH**/ ?>