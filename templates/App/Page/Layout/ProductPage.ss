<h1>Products</h1>
<ul>
    <% loop $Products %>
        <li>
            <h2>$Title</h2>
            <p>$Description</p>
            <p>Price: $Price</p>
            <p>Category: $Category.Title</p>
        </li>
    <% end_loop %>
</ul>

<h1>Categories</h1>
<ul>
    <% loop $Categories %>
        <li>
            <h2>$Title</h2>
            <p>$Description</p>
        </li>
    <% end_loop %>
</ul>