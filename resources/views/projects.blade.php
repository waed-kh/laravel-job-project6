<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Projects</title>
  <style>
    body { font-family: sans-serif; padding: 20px; background: #f7f7f7; }
    .card { background: #fff; padding: 15px; margin-bottom: 10px; border-radius: 8px; box-shadow: 0 0 5px #ccc; }
    .title { font-size: 20px; color: #48A7A5; }
    .meta { color: #777; margin-top: 5px; }
  </style>
</head>
<body>

<h1>قائمة المشاريع</h1>
<div id="projects"></div>

<script>
  fetch('/api/projects')
    .then(res => res.json())
    .then(data => {
      const container = document.getElementById('projects');
      data.forEach(p => {
        container.innerHTML += `
          <div class="card">
            <div class="title">${p.title}</div>
            <div class="meta">الشركة: ${p.company} | الفئة: ${p.category}</div>
            <div>المدة: ${p.duration}, السعر: ${p.price}, الموعد النهائي: ${p.deadline}</div>
            <p>${p.description}</p>
            <small>عدد المشاهدات: ${p.views}</small>
          </div>
        `;
      });
    });
</script>

</body>
</html>
