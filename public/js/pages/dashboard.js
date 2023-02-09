
async function handleLogout(){
    let req = await fetch('/logout');
    let res = await req.text();
    console.log(res);
}