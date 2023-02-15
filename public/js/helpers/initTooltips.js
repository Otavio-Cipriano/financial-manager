export default function initTooltip(){ 
    let observer = new MutationObserver((mutations) =>{
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        if (document.contains(tooltipTriggerList[0])) {
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
            observer.disconnect();
        }
    })
    observer.observe(document, {attributes: false, childList: true, characterData: false, subtree:true});
}