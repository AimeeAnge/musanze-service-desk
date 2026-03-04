<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Musanze District Service Desk</title>
</head>
<body>
    <section id="form">
        <div id="form-card">
            <h2>MUSANZE Service digital Desk</h2>
            <form action="">
                <label for="">services</label>
                <select name="" id="">
                    <option value="">select service</option>
                </select>
                <label for="">Client</label>
                <input type="text" name="" id="">
                <label for="">quantity</label>
                <input type="number">
                <label for="">price</label>
                <input type="number" name="" id="">
                <p id="total"></p>
                <button type="submit">Save record</button>

            </form>
        </div>
    </section>
    <div id="result-area">
                    <p id="success-message"> </p>
     </div>
    <table id="records-table" border="1">
        <thead>
            <tr>
                <th>Client</th>
                <th>Service</th>
                <th>Total</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody id="table-body">
        
        </tbody>
    </table>

</body>
</html>
