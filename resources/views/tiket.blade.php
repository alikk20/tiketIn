<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-blue-100 via-white to-blue-200 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-2xl rounded-xl p-8 w-full max-w-xl border border-gray-200">
        <h1 class="text-3xl font-bold text-blue-700 mb-6 text-center">🎟️ QR Tiket Generator</h1>

        <form action="{{ route('qr.generate') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="tiket_id" class="block text-sm font-semibold text-gray-700 mb-1">Pilih Tiket</label>
                <select name="tiket_id" id="tiket_id" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    <option value="">-- Pilih Tiket --</option>
                    @foreach ($tikets as $tiket)
                        <option value="{{ $tiket->id }}">
                            {{ $tiket->pembeli }} - {{ $tiket->acara->nama ?? 'Tanpa Acara' }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition duration-200 shadow">
                    🔍 Generate QR
                </button>
            </div>
        </form>

        @isset($qr)
            <div class="mt-10 border-t pt-6 text-center">
                <p class="mb-3 text-sm text-gray-600">
                    <span class="font-semibold text-gray-800">QR Code untuk:</span><br>
                    <span class="text-blue-700 font-medium">
                        {{ $tiketTerpilih->pembeli }} - {{ $tiketTerpilih->acara->nama ?? 'Tanpa Acara' }} <br>
                        Kode Tiket: <span class="font-mono">{{ $tiketTerpilih->kode_tiket }}</span>
                    </span>
                </p>

                <div class="inline-block p-4 bg-gray-50 rounded-lg shadow-inner">
                    {!! $qr !!}
                </div>
            </div>
        @endisset
    </div>

</body>
</html>
