export default class Http{
    async post(url, data, ...options){
        let req = await fetch(url, {body: data, ...options});
        let res = await req.json();
        return res;
    }
}