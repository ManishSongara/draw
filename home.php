<!DOCTYPE html>
<html>
  <head>
    <title>Title of the document</title>
    <style>
      .tableFixHead {
        overflow-y: auto;
        height: 600px !important;
      }
      .tableFixHead thead th {
        position: sticky;
        top: 0;
      }
      table {
        border-collapse: collapse;
        width: 100%;
      }
      th,
      td {
        padding: 8px 16px;
        border: 1px solid #ccc;
      }
      th {
        background: #eee;
      }
    </style>
  </head>
  <body>
    <div class="tableFixHead">
      <table>
        <thead>
          <tr>
            <th>Col 1</th>
            <th>Col 2</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.1</td>
            <td>2.1</td>
          </tr>
          <tr>
            <td>1.2</td>
            <td>2.2</td>
          </tr>
          <tr>
            <td>1.3</td>
            <td>2.3</td>
          </tr>
          <tr>
            <td>1.4</td>
            <td>2.4</td>
          </tr>
          <tr>
            <td>1.5</td>
            <td>2.5</td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>