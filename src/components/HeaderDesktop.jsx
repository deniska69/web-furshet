import { useEffect } from "react";

import "./HeaderDesktop.css";

const HeaderDesktop = ({ basketTotal, onOpenBasket }) => {
  useEffect(() => {
    const headerEl = document.getElementById("header-desktop");

    const onScroll = () => {
      const pos = (document.documentElement || document.body.parentNode || document.body).scrollTop;

      let scroll = Math.round((pos < 200 ? pos : 200) / 4);

      if (headerEl) {
        headerEl.style.backgroundColor = `rgba(255, 255, 255, 0.${scroll < 10 ? "0" + scroll : scroll})`;
        headerEl.style.backdropFilter = `blur(${Math.round((scroll / 10) * 3)}px)`;
      }
    };

    window.addEventListener("scroll", onScroll);
  }, []);

  return (
    <div id="header-desktop" className="noselect">
      <a href="#menu">Меню</a>
      <a href="">Акции</a>
      <a href="">Доставка и оплата</a>
      <a href="">Контакты</a>

      <a id="header-basket-wrap" onClick={onOpenBasket}>
        <span>Корзина</span>

        <div id="header-basket-badge-wrap" className={!basketTotal ? "hidden" : ""}>
          <span id="header-basket-badge-counter">{basketTotal}</span>
        </div>
      </a>
    </div>
  );
};

export default HeaderDesktop;