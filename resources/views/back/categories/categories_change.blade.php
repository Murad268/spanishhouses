

<!doctype html>
<html lang="en">

<head>
   <title>Sidebar 05</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Babylonica&family=Bangers&family=Bebas+Neue&family=Cormorant:wght@300;400;500;600;700&family=DM+Sans:wght@400;500;700&family=GFS+Didot&family=Inter:wght@100;300;400;500;600;700;800;900&family=Kaushan+Script&family=Maven+Pro:wght@400;500;600;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Mukta:wght@200;300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&family=Pacifico&family=Playfair+Display+SC:wght@400;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;700;900&family=Rubik+Burned&family=Russo+One&family=Wix+Madefor+Text:wght@400;500;600;700;800&display=swap" rel="stylesheet">
 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="./assets/css/main.css">
   <link rel="stylesheet" href="./assets/css/custom.css">
   <meta name="robots" content="noindex, follow">
 
</head>

<body>
   <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
         <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
               <i class="fa fa-bars"></i>
               <span class="sr-only">Toggle Menu</span>
            </button>
         </div>
         <div class="p-4">
            <h1><a href="index.html" class="logo">Portfolic <span>Portfolio Agency</span></a></h1>
            <ul class="list-unstyled components mb-5">
               <li class="active">
                  <a href="#"><span class="fa fa-home mr-3"></span> Dashboard</a>
               </li>
               <li>
                  <a href="#"><span class="fa fa-user mr-3"></span> About</a>
               </li>
               <li>
                  <a href="#"><span class="fa fa-briefcase mr-3"></span> Headers</a>
               </li>
               <li>
                  <a href="#"><span class="fa fa-sticky-note mr-3"></span> Insta Photos</a>
               </li>
               <li>
                  <a href="#"><span class="fa fa-suitcase mr-3"></span> Founder</a>
               </li>
               <li>
                  <a href="#"><span class="fa fa-cogs mr-3"></span> Building Types</a>
               </li>
               <li>
                  <a href="#"><span class="fa fa-paper-plane mr-3"></span> New Buildings</a>
               </li>
               <li>
                  <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
               </li> <li>
                  <a href="#"><span class="fa fa-paper-plane mr-3"></span> Categories</a>
               </li>
               <li>
                  <a href="#"><span class="fa fa-paper-plane mr-3"></span> Products</a>
               </li>
               <li>
                  <a href="#"><span class="fa fa-paper-plane mr-3"></span> Products Images</a>
               </li>
               <li>
                  <a href="#"><span class="fa fa-paper-plane mr-3"></span> Districts</a>
               </li>
            </ul>
         
         </div>
      </nav>

      <div id="content" class="p-4 p-md-5 pt-5">
         <form>
           
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">name</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">slug</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">status</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
           
      
            <button type="submit" class="btn btn-primary">Change</button>
          </form>
      </div>
   </div>
   <script src="./assets/scripts/jquery.min.js"></script>
   <script src="./assets/scripts/propper.js"></script>
   <script src="./assets/scripts/bootstrap.min.js"></script>
   <script src="./assets/scripts/main.js"></script>
   <script defer
      src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
      integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
      data-cf-beacon='{"rayId":"7dd449f51f438ec3","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}'
      crossorigin="anonymous"></script>
      <script nonce="df5bc33e-1cb2-416c-adb9-4b3d76d033f6">
         (function (w, d) {
            ! function (dK, dL, dM, dN) {
               dK[dM] = dK[dM] || {};
               dK[dM].executed = [];
               dK.zaraz = {
                  deferred: [],
                  listeners: []
               };
               dK.zaraz.q = [];
               dK.zaraz._f = function (dO) {
                  return function () {
                     var dP = Array.prototype.slice.call(arguments);
                     dK.zaraz.q.push({
                        m: dO,
                        a: dP
                     })
                  }
               };
               for (const dQ of ["track", "set", "debug"]) dK.zaraz[dQ] = dK.zaraz._f(dQ);
               dK.zaraz.init = () => {
                  var dR = dL.getElementsByTagName(dN)[0],
                     dS = dL.createElement(dN),
                     dT = dL.getElementsByTagName("title")[0];
                  dT && (dK[dM].t = dL.getElementsByTagName("title")[0].text);
                  dK[dM].x = Math.random();
                  dK[dM].w = dK.screen.width;
                  dK[dM].h = dK.screen.height;
                  dK[dM].j = dK.innerHeight;
                  dK[dM].e = dK.innerWidth;
                  dK[dM].l = dK.location.href;
                  dK[dM].r = dL.referrer;
                  dK[dM].k = dK.screen.colorDepth;
                  dK[dM].n = dL.characterSet;
                  dK[dM].o = (new Date).getTimezoneOffset();
                  if (dK.dataLayer)
                     for (const dX of Object.entries(Object.entries(dataLayer).reduce(((dY, dZ) => ({
                           ...dY[1],
                           ...dZ[1]
                        })), {}))) zaraz.set(dX[0], dX[1], {
                        scope: "page"
                     });
                  dK[dM].q = [];
                  for (; dK.zaraz.q.length;) {
                     const d_ = dK.zaraz.q.shift();
                     dK[dM].q.push(d_)
                  }
                  dS.defer = !0;
                  for (const ea of [localStorage, sessionStorage]) Object.keys(ea || {}).filter((ec => ec
                     .startsWith("_zaraz_"))).forEach((eb => {
                     try {
                        dK[dM]["z_" + eb.slice(7)] = JSON.parse(ea.getItem(eb))
                     } catch {
                        dK[dM]["z_" + eb.slice(7)] = ea.getItem(eb)
                     }
                  }));
                  dS.referrerPolicy = "origin";
                  dS.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(dK[dM])));
                  dR.parentNode.insertBefore(dS, dR)
               };
               ["complete", "interactive"].includes(dL.readyState) ? zaraz.init() : dK.addEventListener(
                  "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
         })(window, document);
      </script>
</body>

</html>
</body>

</html>