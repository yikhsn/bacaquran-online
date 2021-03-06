import axios from 'axios';

export default class Search {

    constructor(query){
        this.query = query;
    }

    async getResults(){
        try {
            const res = await axios(`http://127.0.0.1:8000/api/surat/query/${this.query}`);

            this.result = res.data;
        } catch (error) {
            console.log(error);
        }
    }
};