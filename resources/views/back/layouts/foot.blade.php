<script src="{{asset('assets/admin/scripts/jquery.min.js')}}"></script>
      <script src="{{asset('assets/admin/scripts/propper.js')}}"></script>
      <script src="{{asset('assets/admin/scripts/bootstrap.min.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
      <script src="{{asset('assets/admin/scripts/main.js')}}"></script>
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


            $(document).ready(function() {
                $('.select2').select2();
                });
         </script>
