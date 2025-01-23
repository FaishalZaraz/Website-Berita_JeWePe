<?php
include('template/header.php');
include('admin/config_query.php');
$db = new database();
$data_article = $db->show_data_landing();
?>
<section class="section">
	<div class="container">
		<div class="row mb-4">
			<div class="col-sm-6">
				<h2 class="posts-entry-title">e-Mading JeWePe 2024</h2>
			</div>
		</div>

		<!-- Ubah class row menjadi row-cols agar tampil horizontal -->
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<?php foreach ($data_article as $row): ?>
				<div class="col">
					<div class="post-entry-alt">
						<a href="detail.php?id=<?= $row['id_article']; ?>" class="img-link">
							<img src="files/<?= $row['imageurl']; ?>" alt="Image" class="img-fluid" style="max-height: 300px;">
						</a>
						<div class="excerpt">
							<h2>
								<a href="detail.php?id=<?= $row['id_article']; ?>">
									<?= htmlspecialchars($row['title']); ?>
								</a>
							</h2>
							<div class="post-meta align-items-center text-left clearfix">
								<figure class="author-figure mb-0 me-3 float-start">
									<img src="assets/landing/images/ricardo.jpg" alt="Image" class="img-fluid">
								</figure>
								<span class="d-inline-block mt-1">By 
									<a href="#"><?= htmlspecialchars($row['name']); ?></a>
								</span>
								<span> - 
									<?= date('d M Y H:i:s', strtotime($row['updated_at'] ?: $row['created_at'])); ?>
								</span>
							</div>

							<p>
								<?= substr(strip_tags($row['content']), 0, 150) . '...'; ?>
								<a href="detail.php?id=<?= $row['id_article']; ?>" class="read-more">Selengkapnya</a>
							</p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php include('template/footer.php'); ?>
