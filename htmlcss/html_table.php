<h1>Table</h1>
<ol>
	<li>Tables are defined with the <b>&lt;table></b> tag. We can give a border attribute to the table.</li>
	<li>Tables are divided into table rows with the <b>&lt;tr></b> tag.</li>
	<li>Table rows are divided into table data with the <b>&lt;td></b> tag. or <b>&lt;th></b></li>
</ol>
<ul>
	<li>Table head: <b>&lt;thead></b></li>
	<li>Table body: <b>&lt;tbody></b></li>
	<li>Table Foot: <b>&lt;tfoot></b></li>
	<li>Caption: <b>&lt;caption></b></li>
	<li>Colspan: To make Cells span many columns, use the colspan attribute.</li>
	<li>Rowspan: To make Cells span many rows, use the rowspan attribute.</li>
</ul>

<h2>Simple Table</h2>
<?php sc1(); ?>
<table border="1">
	<tr>
		<th>Sl.No</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Address</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Ramesh</td>
		<td>1112223334</td>
		<td>NDK</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Suresh</td>
		<td>1112223334</td>
		<td>KNL</td>
	</tr>
</table>
<?php sc2(); ?>
<h2>Tables with thead, tbody, tfoot</h2>
<?php sc1(); ?>
<table border="1">
	<thead>
		<tr>
			<th colspan="3">
				<h2>Paradise Hotel Bill</h2>Address: Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, adipisci
				corporis
				libero aut ad distinctio reprehenderit. Nobis sunt dolore quas fugit ad ipsam ab recusandae, ex sed. Ut, natus
				tempora.
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Sl.No</th>
			<th>Item</th>
			<th>Price</th>
		</tr>
		<tr>
			<td>1.</td>
			<td>Idly</td>
			<td>30</td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Dosa</td>
			<td>30</td>
		</tr>
		<tr>
			<td>3.</td>
			<td>Poori</td>
			<td>25</td>
		</tr>
		<tr>
			<td>4.</td>
			<td>Upma</td>
			<td>50</td>
		</tr>
		<tr>
			<td>5.</td>
			<td>Uggani</td>
			<td>40</td>
		</tr>
		<tr>
			<td>6.</td>
			<td>Water Bottle</td>
			<td rowspan="2">Free</td>
		</tr>
		<tr>
			<td>7.</td>
			<td>Cool drink</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2">Total</td>
			<td>175</td>
		</tr>
	</tfoot>
</table>
<?php sc2(); ?>
<h2>Task: Create a school timetable with 8 periods and 6 days</h2>