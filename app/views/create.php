<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Musanze District Service Desk</title>
</head>
<body>
    <section id="form-card">
        <div>
            <label>Service Selection</label>
            <select id="service-dropdown">
                <option value="">-- Select Service --</option>
                <option value="potato">Potato Aggregation</option>
                <option value="event">INES Event Registration</option>
                <option value="homestay">Home Stay Booking</option>
            </select>
        </div>

        <div>
            <label>Client Information</label>
            <input type="text" id="client-input" placeholder="Enter Name">
        </div>

        <div>
            <label>Quantity</label>
            <input type="number" id="quantity" placeholder="0">
        </div>

        <div>
            <label>Unit Price (RWF)</label>
            <input type="number" id="price" placeholder="0">
        </div>

        <!-- Total Display Area -->
        <div id="total-display-area">
            <strong>Total: </strong> <span id="live-total">0</span> RWF
        </div>

        <button type="button" id="submit-button">Submit Record</button>
    </section>

    <!-- Result Area -->
    <div id="result-area">
        <p id="success-message" style="display:none;">✔ Record Saved Successfully!</p>
    </div>

    <!-- Records Table -->
    <table id="records-table" border="1">
        <thead>
            <tr>
                <th>Client</th>
                <th>Service</th>
                <th>Total (RWF)</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody id="table-body">
            <!-- Records will appear here -->
        </tbody>
    </table>

</body>
</html>
