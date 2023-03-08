<?php include __DIR__ . '/inc/header.php'; ?>
<div class="container mt-4">
  <h1>Menu Items</h1>
  <div class="row mt-4">
    <div class="col-md-6">
      <form>
        <div class="mb-3">
          <label for="itemName" class="form-label">Item Name</label>
          <input type="text" class="form-control" id="itemName" />
        </div>
        <div class="mb-3">
          <label for="itemDescription" class="form-label">Description</label>
          <textarea class="form-control" id="itemDescription"></textarea>
        </div>
        <div class="mb-3">
          <label for="itemPrice" class="form-label">Price</label>
          <input type="number" step="0.01" class="form-control" id="itemPrice" />
        </div>
        <button type="submit" class="btn btn-primary">Add Item</button>
      </form>
    </div>
    <div class="col-md-6">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Cheese Pizza</td>
            <td>A delicious pizza with melted cheese</td>
            <td>$12.99</td>
            <td>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary">
                  <i class="fas fa-edit"></i>
                </button>
                <button type="button" class="btn btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Pepperoni Pizza</td>
            <td>A classic pizza with pepperoni and cheese</td>
            <td>$14.99</td>
            <td>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary">
                  <i class="fas fa-edit"></i>
                </button>
                <button type="button" class="btn btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Garlic Bread</td>
            <td>Crunchy bread with garlic seasoning</td>
            <td>$5.99</td>
            <td>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary">
                  <i class="fas fa-edit"></i>
                </button>
                <button type="button" class="btn btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include __DIR__ . '/inc/footer.php'; ?>