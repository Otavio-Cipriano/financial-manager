function main(){
    initDateBanner();
}

function initDateBanner(){
    const dateBanner = document.querySelector('.date_banner');
    const locale = navigator.language;
    const date = new Date;
    const year = date.toLocaleDateString(locale, {year: '2-digit'})
    const month = date.toLocaleDateString(locale, {month: 'long'})
    dateBanner.innerHTML = 'Mês de Referencia: ' + month + '/' + year
}

main();