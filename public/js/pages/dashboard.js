import createTableRow from "../DOM/createTableRow.js";
import initTooltip from "../helpers/initTooltips.js";
import {getReleases} from "../services/getReleases.js";

async function main(){
    initDateBanner();
    await loadReleases();
    initTooltip();
    handleActions();
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

function listenActions(){
    const actionBtns = document.querySelectorAll('.table-action > i')
    actionBtns.forEach(btn =>{
        btn.addEventListener('click', () =>{
            handleActions(dataset.name, dataset.index)
        })
    })
}

function handleActions(actionName, releaseId){
    switch (actionName) {
        case 'detail':
            showDetail(releaseId)
            break;
        case 'edit':
            editDetail(releaseId)
            break;
        case 'delet':
            deletDetail(releaseId)
            break;
    }
}

main();