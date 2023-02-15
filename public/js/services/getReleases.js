export  async function getReleases(){
    let req = await fetch('/releases');
    let res = await req.json();
    return res;
}