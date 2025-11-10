<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>{{ $setting->judul ?? 'Website' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
  <header class="bg-white shadow">
    <div class="max-w-5xl mx-auto p-6 flex items-center gap-6">
      @if($setting && $setting->gambar)
        <img src="{{ asset('uploads/'.$setting->gambar) }}" alt="hero" class="w-32 h-20 object-cover rounded">
      @endif
      <div>
        <h1 class="text-2xl font-bold">{{ $setting->judul ?? '' }}</h1>
        <p class="text-gray-600">{{ $setting->subjudul ?? '' }}</p>
      </div>
      <div class="ml-auto">
        <a href="tel:{{ $setting->no_hp ?? '#' }}" class="px-3 py-2 bg-blue-600 text-white rounded">{{ $setting->text_button ?? 'Hubungi' }}</a>
      </div>
    </div>
  </header>

  <main class="max-w-5xl mx-auto p-6">
    <section class="mb-8">
      <h2 class="text-xl font-semibold mb-4">Statistik</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($stats as $stat)
          <div class="bg-white p-4 rounded shadow text-center">
            <div class="text-3xl">{{ $stat->icon }}</div>
            <div class="text-2xl font-bold">{{ $stat->data_angka }}</div>
            <div class="text-gray-600">{{ $stat->keterangan }}</div>
          </div>
        @endforeach
      </div>
    </section>

    <section>
      <h2 class="text-xl font-semibold mb-4">{{ $setting->judul_team ?? 'Team' }}</h2>
      <p class="mb-4">{{ $setting->subjudul_team ?? '' }}</p>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($teams as $team)
          <div class="bg-white p-4 rounded shadow text-center">
            @if($team->gambar)
              <img src="{{ asset('uploads/'.$team->gambar) }}" class="mx-auto w-32 h-32 object-cover rounded-full" alt="{{ $team->nama }}">
            @endif
            <div class="font-semibold mt-2">{{ $team->nama }}</div>
            <div class="text-gray-500">{{ $team->divisi }}</div>
            <div class="mt-2 space-x-2">
              @if($team->link_ig)<a href="{{ $team->link_ig }}" target="_blank">IG</a>@endif
              @if($team->link_fb)<a href="{{ $team->link_fb }}" target="_blank">FB</a>@endif
              @if($team->link_in)<a href="{{ $team->link_in }}" target="_blank">IN</a>@endif
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </main>
</body>
</html>
