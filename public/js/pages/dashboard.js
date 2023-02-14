import createTableRow from "../DOM/createTableRow.js";
import {getReleases} from "../services/getReleases.js";

function main(){
    initDateBanner();
    loadReleases();
}

function initDateBanner(){
    const dateBanner = document.querySelector('.date_banner');
    const locale = navigator.language;
    const date = new Date;
    const year = date.toLocaleDateString(locale, {year: '2-digit'})
    const month = date.toLocaleDateString(locale, {month: 'long'})
    dateBanner.innerHTML = 'Mês de Referencia: ' + month + '/' + year
}

async function loadReleases(){
    const table = document.querySelector('tbody');
    let releases = await getReleases();
    console.log(releases)
    releases.forEach(release => {
        let row = createTableRow(release);
        table.insertAdjacentHTML('beforeEnd', row);
    });
}

main();