class Leads {
    constructor() {
        this.baseUrl = 'http://localhost:4000'
    }

    all(then) {
       return fetch(`${this.baseUrl}/api/leads`, {
           headers: {
               'Content-Type': 'application/json'
           }
       })
           .then(response => response.json())
           .then(data => then(data));
    }

    allWithCriteria(data = {}, then) {
        console.log(data);
        return fetch(`${this.baseUrl}/api/leads?location=${data.location}&service=${data.service}`, {
            headers: {
                'Content-Type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(data => then(data));
    }
}

export default Leads;