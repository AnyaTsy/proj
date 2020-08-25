@php
    include 'app/lectures/arrays/apps.php';
@endphp

<link href="/app/lectures/lecture-1.css" rel="stylesheet">

<div>

    <div class="text-center">
        <div class="main-img-app" style="transform: translate(0px, -5.68434e-14px) rotate(0deg);">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" version="1.0" viewBox="-0.4 -0.0 440.6 286.0" zoomAndPan="magnify" style="fill: rgb(0, 0, 0);"><defs><clipPath id="__id71_sdxa29b60k"><path d="M 33 165 L 218 165 L 218 285.949219 L 33 285.949219 Z M 33 165"></path></clipPath><clipPath id="__id72_sdxa29b60k"><path d="M 364 248 L 440.21875 248 L 440.21875 285.949219 L 364 285.949219 Z M 364 248"></path></clipPath><clipPath id="__id73_sdxa29b60k"><path d="M 217 165 L 403 165 L 403 285.949219 L 217 285.949219 Z M 217 165"></path></clipPath></defs><g><g id="__id74_sdxa29b60k"><path d="M 33.164062 248.511719 L 70.398438 243.527344 L 70.082031 281.957031 L 54.566406 281.925781 L 51.277344 273.453125 L 46.304688 282.210938 L 2.570312 282.011719 C 0.808594 282.003906 -0.425781 280.273438 0.136719 278.605469 C 1.890625 273.429688 6.6875 269.894531 12.152344 269.757812 C 17.359375 269.628906 20.921875 266.542969 24.433594 261.8125 L 33.164062 248.511719" style="fill: rgb(103, 114, 229);"></path></g><g clip-path="url(#__id71_sdxa29b60k)" id="__id75_sdxa29b60k"><path d="M 217.675781 236.734375 L 217.675781 245.832031 C 217.675781 267.550781 200.394531 285.324219 178.683594 285.9375 C 165.273438 286.3125 152.679688 279.507812 145.648438 268.082031 L 110.203125 210.480469 L 86.554688 268.992188 C 86.554688 268.992188 33.894531 249.730469 33.164062 248.511719 C 32.613281 247.597656 67.042969 197.789062 84.195312 173.085938 C 89.484375 165.460938 99.828125 163.328125 107.707031 168.234375 L 217.675781 236.734375" style="fill: rgb(164, 171, 239);"></path></g><g id="__id76_sdxa29b60k"><path d="M 27.246094 82.636719 L 44.925781 132.902344 L 55.035156 132.476562 L 77.953125 130.914062 L 82.476562 134.929688 L 84.796875 134.246094 L 85.550781 128.5 L 101.589844 122.632812 L 82.050781 73.007812 L 57.800781 80.972656 L 27.246094 82.636719" style="fill: rgb(164, 171, 239);"></path></g><g id="__id77_sdxa29b60k"><path d="M 166.65625 117.8125 C 166.65625 117.8125 166.640625 98.148438 160.714844 84.890625 L 156.125 86.320312 C 150.078125 88.207031 143.585938 85.222656 141.085938 79.402344 L 139.074219 74.722656 L 132.519531 77.09375 L 132.519531 57.570312 L 128.753906 47.394531 L 157.757812 49.902344 L 161.242188 56.597656 L 176.019531 60.5 L 187.730469 90.386719 L 188.429688 117.8125 L 168.214844 125.058594 L 166.65625 117.8125" style="fill: rgb(246, 212, 210);"></path></g><g id="__id78_sdxa29b60k"><path d="M 130.664062 52.5625 L 160.746094 49.324219 L 171.511719 80.9375 L 194.097656 61.628906 C 194.097656 61.628906 182.5625 17.113281 150.726562 17.039062 C 133.058594 16.996094 120.386719 33.90625 124.851562 51 C 125.199219 52.339844 125.484375 53.121094 125.484375 53.121094 L 130.664062 52.5625" style="fill: rgb(27, 60, 96);"></path></g><g id="__id79_sdxa29b60k"><path d="M 169.578125 50.503906 C 169.578125 55.136719 165.820312 58.894531 161.1875 58.894531 C 156.550781 58.894531 152.792969 55.136719 152.792969 50.503906 C 152.792969 45.867188 156.550781 42.109375 161.1875 42.109375 C 165.820312 42.109375 169.578125 45.867188 169.578125 50.503906" style="fill: rgb(246, 212, 210);"></path></g><g id="__id80_sdxa29b60k"><path d="M 151.789062 67.964844 C 152.472656 69.488281 151.164062 71.558594 148.871094 72.585938 C 146.574219 73.613281 144.164062 73.210938 143.480469 71.691406 C 142.796875 70.167969 144.105469 68.097656 146.398438 67.070312 C 148.695312 66.042969 151.105469 66.441406 151.789062 67.964844" style="fill: rgb(103, 114, 229);"></path></g><g id="__id81_sdxa29b60k"><path d="M 292.867188 87.160156 L 273.050781 91.824219 L 273.414062 59.441406 L 267.898438 64.050781 L 257.015625 94.515625 C 257.015625 94.515625 235.804688 101.300781 223.683594 78.425781 C 223.683594 78.425781 233.746094 73.121094 237.203125 57.933594 C 240.671875 42.757812 247.632812 14.925781 275.210938 19.328125 C 284.277344 20.773438 289.601562 22.699219 294.113281 25.53125 C 294.113281 25.53125 310.984375 34.035156 305.085938 73.789062 C 304.113281 80.347656 299.269531 85.65625 292.867188 87.160156" style="fill: rgb(27, 60, 96);"></path></g><g id="__id82_sdxa29b60k"><path d="M 281.558594 62.65625 C 281.117188 63.945312 282.320312 65.535156 284.246094 66.203125 C 286.175781 66.871094 288.09375 66.371094 288.535156 65.078125 C 288.976562 63.789062 287.769531 62.203125 285.84375 61.53125 C 283.914062 60.863281 281.996094 61.367188 281.558594 62.65625" style="fill: rgb(103, 114, 229);"></path></g><g id="__id83_sdxa29b60k"><path d="M 258.0625 77.859375 L 263.882812 66.5 L 269.757812 55.316406 C 270.828125 55.835938 272.046875 56.078125 273.316406 55.960938 C 277.054688 55.621094 279.816406 52.285156 279.480469 48.507812 C 279.453125 48.226562 279.414062 47.949219 279.355469 47.683594 L 298.664062 44.21875 L 296.355469 52.78125 L 297.773438 68.675781 L 292.3125 67.226562 L 291.03125 71.183594 C 290.820312 71.824219 290.550781 72.433594 290.234375 73.003906 L 284.347656 67.746094 L 286.847656 76.578125 C 284.695312 77.945312 282.042969 78.496094 279.390625 77.914062 L 275.578125 77.085938 C 271.753906 88.316406 273.171875 104.324219 273.171875 104.324219 L 272.4375 110.339844 L 255.589844 105.917969 L 258.0625 77.859375" style="fill: rgb(246, 212, 210);"></path></g><g id="__id84_sdxa29b60k"><path d="M 281.558594 62.65625 C 281.117188 63.945312 282.320312 65.535156 284.246094 66.203125 C 286.175781 66.871094 288.09375 66.371094 288.535156 65.078125 C 288.976562 63.789062 287.769531 62.203125 285.84375 61.53125 C 283.914062 60.863281 281.996094 61.367188 281.558594 62.65625" style="fill: rgb(103, 114, 229);"></path></g><g id="__id85_sdxa29b60k"><path d="M 269.757812 55.316406 C 269.757812 55.316406 275.296875 99.347656 235.46875 97.988281 C 213.421875 97.234375 205.53125 84.804688 202.878906 73.855469 C 201.113281 66.550781 207.257812 59.894531 214.671875 60.6875 C 223.550781 61.640625 234.851562 59.453125 240.753906 44.796875 C 250.910156 19.585938 256.734375 62.578125 256.734375 62.578125 L 269.757812 55.316406" style="fill: rgb(27, 60, 96);"></path></g><g id="__id86_sdxa29b60k"><path d="M 290.539062 58.789062 C 290.917969 58.789062 291.242188 58.503906 291.28125 58.113281 L 291.621094 54.792969 C 291.660156 54.378906 291.363281 54.011719 290.953125 53.96875 C 290.578125 53.929688 290.179688 54.226562 290.136719 54.640625 L 289.800781 57.960938 C 289.757812 58.371094 290.054688 58.742188 290.464844 58.785156 C 290.488281 58.785156 290.515625 58.789062 290.539062 58.789062" style="fill: rgb(27, 60, 96);"></path></g><g id="__id87_sdxa29b60k"><path d="M 285.925781 53.5625 C 286.140625 53.5625 286.351562 53.46875 286.5 53.289062 C 288.777344 50.503906 292.1875 50.253906 292.226562 50.25 C 292.632812 50.222656 292.945312 49.867188 292.921875 49.453125 C 292.894531 49.039062 292.539062 48.726562 292.136719 48.75 C 291.96875 48.757812 288.054688 49.03125 285.351562 52.332031 C 285.085938 52.652344 285.132812 53.125 285.449219 53.390625 C 285.589844 53.503906 285.757812 53.5625 285.925781 53.5625" style="fill: rgb(27, 60, 96);"></path></g><g id="__id88_sdxa29b60k"><path d="M 248.109375 89.191406 L 265.011719 100.753906 L 273.414062 59.441406 L 270.019531 60.210938 L 248.109375 89.191406" style="fill: rgb(246, 212, 210);"></path></g><g id="__id89_sdxa29b60k"><path d="M 138.691406 180.207031 L 129.84375 193.34375 C 125.683594 199.515625 116.667969 199.734375 112.214844 193.765625 L 69.238281 136.175781 L 62.664062 134.464844 C 58.386719 133.351562 55.722656 129.085938 56.605469 124.75 L 60.164062 107.25 C 60.515625 105.527344 62.03125 104.289062 63.789062 104.289062 C 65.964844 104.289062 67.941406 105.550781 68.851562 107.523438 L 79.398438 130.28125 L 85.550781 128.5 L 116.398438 155.160156 L 138.691406 163.109375 L 138.691406 180.207031" style="fill: rgb(246, 212, 210);"></path></g><g clip-path="url(#__id72_sdxa29b60k)" id="__id90_sdxa29b60k"><path d="M 402.136719 248.21875 L 364.070312 248.339844 L 371.957031 285.949219 L 387.164062 282.859375 L 388.71875 273.90625 L 395.320312 281.511719 L 438.15625 272.699219 C 439.882812 272.34375 440.75 270.402344 439.867188 268.878906 C 437.132812 264.148438 431.730469 261.628906 426.347656 262.574219 C 421.214844 263.472656 417.113281 261.148438 412.738281 257.203125 L 402.136719 248.21875" style="fill: rgb(164, 171, 239);"></path></g><g id="__id91_sdxa29b60k"><path d="M 408.058594 82.339844 L 390.382812 132.609375 L 380.269531 132.183594 L 357.351562 130.621094 L 352.828125 134.632812 L 350.507812 133.949219 L 349.757812 128.203125 L 333.714844 122.335938 L 353.253906 72.710938 L 377.507812 80.679688 L 408.058594 82.339844" style="fill: rgb(103, 114, 229);"></path></g><g id="__id92_sdxa29b60k"><path d="M 296.613281 179.910156 L 305.464844 193.046875 C 309.625 199.222656 318.636719 199.4375 323.089844 193.472656 L 366.066406 135.878906 L 372.640625 134.167969 C 376.921875 133.054688 379.582031 128.789062 378.699219 124.453125 L 375.140625 106.953125 C 374.789062 105.230469 373.273438 103.992188 371.515625 103.992188 C 369.34375 103.992188 367.367188 105.253906 366.453125 107.226562 L 355.90625 129.984375 L 349.757812 128.203125 L 318.90625 154.863281 L 296.613281 162.8125 L 296.613281 179.910156" style="fill: rgb(246, 212, 210);"></path></g><g id="__id93_sdxa29b60k"><path d="M 318.90625 154.863281 L 284.121094 110.371094 C 278.871094 103.652344 271.902344 98.46875 263.957031 95.371094 L 248.109375 89.191406 C 248.109375 89.191406 210.203125 143.273438 217.632812 236.4375 L 290.515625 195.144531 L 267.496094 141.429688 L 292.566406 184.453125 L 318.90625 154.863281" style="fill: rgb(103, 114, 229);"></path></g><g id="__id94_sdxa29b60k"><path d="M 267.496094 205.375 L 267.496094 141.429688 L 289.988281 191.363281 Z M 267.496094 205.375" style="fill: rgb(27, 60, 96);"></path></g><g id="__id95_sdxa29b60k"><path d="M 397.863281 254.710938 C 397.515625 254.710938 397.203125 254.464844 397.132812 254.109375 C 397.050781 253.703125 397.3125 253.308594 397.71875 253.226562 L 407.953125 251.167969 C 408.355469 251.085938 408.757812 251.351562 408.835938 251.757812 C 408.917969 252.160156 408.65625 252.558594 408.25 252.640625 L 398.015625 254.695312 C 397.964844 254.707031 397.914062 254.710938 397.863281 254.710938" style="fill: rgb(27, 60, 96);"></path></g><g id="__id96_sdxa29b60k"><path d="M 402.058594 259.457031 C 401.710938 259.457031 401.394531 259.210938 401.324219 258.855469 C 401.242188 258.449219 401.507812 258.054688 401.914062 257.972656 L 412.148438 255.914062 C 412.554688 255.832031 412.949219 256.09375 413.03125 256.5 C 413.113281 256.90625 412.847656 257.300781 412.441406 257.382812 L 402.207031 259.441406 C 402.15625 259.453125 402.109375 259.457031 402.058594 259.457031" style="fill: rgb(27, 60, 96);"></path></g><g id="__id97_sdxa29b60k"><path d="M 407.128906 263.679688 C 406.78125 263.679688 406.46875 263.433594 406.394531 263.078125 C 406.3125 262.671875 406.578125 262.277344 406.984375 262.195312 L 417.21875 260.136719 C 417.621094 260.054688 418.019531 260.316406 418.101562 260.726562 C 418.183594 261.128906 417.917969 261.523438 417.511719 261.605469 L 407.277344 263.664062 C 407.226562 263.675781 407.179688 263.679688 407.128906 263.679688" style="fill: rgb(27, 60, 96);"></path></g><g id="__id98_sdxa29b60k"><path d="M 367.949219 104.742188 C 367.855469 104.742188 367.761719 104.722656 367.667969 104.6875 C 367.28125 104.527344 367.101562 104.089844 367.257812 103.707031 L 376.8125 80.394531 C 376.96875 80.011719 377.40625 79.828125 377.789062 79.984375 C 378.175781 80.140625 378.355469 80.578125 378.199219 80.960938 L 368.644531 104.277344 C 368.527344 104.566406 368.246094 104.742188 367.949219 104.742188" style="fill: rgb(27, 60, 96);"></path></g><g clip-path="url(#__id73_sdxa29b60k)" id="__id99_sdxa29b60k"><path d="M 402.136719 248.21875 C 401.40625 249.4375 348.746094 268.695312 348.746094 268.695312 L 330.648438 261.917969 L 308.769531 278.085938 L 264.457031 285.035156 C 262.238281 285.445312 259.976562 285.65625 257.6875 285.65625 C 257.328125 285.65625 256.976562 285.648438 256.617188 285.636719 C 234.90625 285.027344 217.628906 267.257812 217.628906 245.535156 L 217.628906 236.4375 L 327.597656 167.9375 C 335.476562 163.039062 345.816406 165.167969 351.109375 172.785156 C 368.269531 197.496094 402.6875 247.296875 402.136719 248.21875" style="fill: rgb(103, 114, 229);"></path></g><g id="__id100_sdxa29b60k"><path d="M 116.398438 155.160156 L 151.183594 110.667969 C 156.4375 103.945312 163.402344 98.765625 171.347656 95.664062 L 187.195312 89.484375 C 187.195312 89.484375 225.101562 143.570312 217.675781 236.734375 L 148.816406 204.328125 L 167.808594 141.726562 L 142.738281 184.75 L 116.398438 155.160156" style="fill: rgb(103, 114, 229);"></path></g><g id="__id101_sdxa29b60k"><path d="M 161.5 210.296875 L 167.808594 141.726562 L 148.816406 204.328125 Z M 161.5 210.296875" style="fill: rgb(27, 60, 96);"></path></g><g id="__id102_sdxa29b60k"><path d="M 147.390625 271.402344 C 147.136719 271.402344 146.890625 271.273438 146.75 271.046875 L 110.34375 212.132812 L 87.25 269.273438 C 87.09375 269.65625 86.660156 269.839844 86.273438 269.6875 C 85.890625 269.53125 85.703125 269.09375 85.859375 268.710938 L 110.0625 208.824219 L 148.027344 270.257812 C 148.242188 270.609375 148.136719 271.070312 147.78125 271.289062 C 147.660156 271.363281 147.523438 271.402344 147.390625 271.402344" style="fill: rgb(27, 60, 96);"></path></g><g id="__id103_sdxa29b60k"><path d="M 98.886719 212.964844 C 98.546875 212.964844 98.242188 212.734375 98.15625 212.390625 C 98.0625 211.988281 98.308594 211.582031 98.714844 211.484375 L 121.207031 206.089844 C 121.609375 205.992188 122.015625 206.238281 122.109375 206.644531 C 122.207031 207.042969 121.960938 207.449219 121.558594 207.546875 L 99.0625 212.945312 C 99.003906 212.960938 98.945312 212.964844 98.886719 212.964844" style="fill: rgb(27, 60, 96);"></path></g><g id="__id104_sdxa29b60k"><path d="M 38.375 256.453125 L 27.9375 256.453125 C 27.523438 256.453125 27.1875 256.113281 27.1875 255.703125 C 27.1875 255.285156 27.523438 254.953125 27.9375 254.953125 L 38.375 254.953125 C 38.789062 254.953125 39.125 255.285156 39.125 255.703125 C 39.125 256.113281 38.789062 256.453125 38.375 256.453125" style="fill: rgb(27, 60, 96);"></path></g><g id="__id105_sdxa29b60k"><path d="M 35.199219 261.929688 L 24.761719 261.929688 C 24.347656 261.929688 24.011719 261.59375 24.011719 261.179688 C 24.011719 260.765625 24.347656 260.429688 24.761719 260.429688 L 35.199219 260.429688 C 35.613281 260.429688 35.949219 260.765625 35.949219 261.179688 C 35.949219 261.59375 35.613281 261.929688 35.199219 261.929688" style="fill: rgb(27, 60, 96);"></path></g><g id="__id106_sdxa29b60k"><path d="M 31.0625 267.070312 L 20.621094 267.070312 C 20.207031 267.070312 19.871094 266.734375 19.871094 266.320312 C 19.871094 265.90625 20.207031 265.570312 20.621094 265.570312 L 31.0625 265.570312 C 31.476562 265.570312 31.8125 265.90625 31.8125 266.320312 C 31.8125 266.734375 31.476562 267.070312 31.0625 267.070312" style="fill: rgb(27, 60, 96);"></path></g><g id="__id107_sdxa29b60k"><path d="M 151.914062 87.714844 C 146.898438 87.714844 142.246094 84.699219 140.296875 79.808594 L 138.644531 75.675781 L 131.769531 78.160156 L 131.769531 57.707031 L 128.894531 49.949219 L 130.300781 49.425781 L 133.269531 57.570312 L 133.269531 76.023438 L 139.5 73.769531 L 141.6875 79.25 C 143.8125 84.566406 149.554688 87.363281 155.050781 85.761719 L 160.503906 84.171875 L 160.921875 85.609375 L 155.46875 87.203125 C 154.285156 87.546875 153.089844 87.714844 151.914062 87.714844" style="fill: rgb(27, 60, 96);"></path></g><g id="__id108_sdxa29b60k"><path d="M 157.816406 56.496094 C 157.464844 56.496094 157.152344 56.25 157.082031 55.894531 C 156.402344 52.480469 156.757812 45.59375 162.972656 43.96875 C 163.371094 43.859375 163.78125 44.105469 163.886719 44.503906 C 163.992188 44.90625 163.753906 45.316406 163.351562 45.421875 C 160.6875 46.117188 159.066406 48.011719 158.539062 51.050781 C 158.128906 53.414062 158.550781 55.578125 158.554688 55.601562 C 158.632812 56.007812 158.371094 56.402344 157.964844 56.480469 C 157.914062 56.492188 157.863281 56.496094 157.816406 56.496094" style="fill: rgb(27, 60, 96);"></path></g><g id="__id109_sdxa29b60k"><path d="M 166.394531 53.265625 C 166.171875 53.265625 165.953125 53.164062 165.804688 52.976562 C 165.691406 52.835938 163.238281 49.824219 158.316406 49.738281 C 157.902344 49.730469 157.570312 49.390625 157.578125 48.976562 C 157.585938 48.5625 157.960938 48.238281 158.34375 48.238281 C 164.015625 48.339844 166.867188 51.902344 166.984375 52.054688 C 167.242188 52.378906 167.183594 52.851562 166.855469 53.105469 C 166.71875 53.214844 166.558594 53.265625 166.394531 53.265625" style="fill: rgb(27, 60, 96);"></path></g><g id="__id110_sdxa29b60k"><path d="M 144.097656 65.351562 C 143.789062 65.351562 143.503906 65.164062 143.390625 64.859375 L 142.292969 61.886719 C 142.148438 61.5 142.347656 61.066406 142.738281 60.925781 C 143.121094 60.777344 143.558594 60.980469 143.699219 61.367188 L 144.800781 64.34375 C 144.941406 64.730469 144.742188 65.160156 144.355469 65.304688 C 144.269531 65.335938 144.183594 65.351562 144.097656 65.351562" style="fill: rgb(27, 60, 96);"></path></g><g id="__id111_sdxa29b60k"><path d="M 148.433594 58.867188 C 148.242188 58.867188 148.050781 58.792969 147.90625 58.644531 C 144.546875 55.289062 140.480469 56.453125 140.4375 56.464844 C 140.042969 56.578125 139.625 56.359375 139.507812 55.960938 C 139.386719 55.5625 139.613281 55.144531 140.011719 55.027344 C 140.210938 54.96875 144.980469 53.601562 148.964844 57.585938 C 149.257812 57.878906 149.257812 58.355469 148.964844 58.644531 C 148.820312 58.792969 148.628906 58.867188 148.433594 58.867188" style="fill: rgb(27, 60, 96);"></path></g><g id="__id112_sdxa29b60k"><path d="M 142.53125 83.011719 C 142.167969 83.011719 141.851562 82.75 141.792969 82.378906 C 141.726562 81.972656 142.007812 81.585938 142.414062 81.523438 C 142.460938 81.515625 146.953125 80.761719 147.703125 77.589844 C 147.800781 77.1875 148.203125 76.9375 148.609375 77.035156 C 149.011719 77.128906 149.261719 77.53125 149.164062 77.9375 C 148.179688 82.09375 142.875 82.96875 142.648438 83.003906 C 142.609375 83.011719 142.570312 83.011719 142.53125 83.011719" style="fill: rgb(27, 60, 96);"></path></g><g id="__id113_sdxa29b60k"><path d="M 67.355469 105.039062 C 67.058594 105.039062 66.78125 104.863281 66.660156 104.570312 L 57.105469 81.257812 C 56.949219 80.875 57.132812 80.4375 57.515625 80.28125 C 57.898438 80.125 58.335938 80.304688 58.492188 80.6875 L 68.046875 104.003906 C 68.207031 104.386719 68.023438 104.824219 67.640625 104.980469 C 67.546875 105.019531 67.449219 105.039062 67.355469 105.039062" style="fill: rgb(27, 60, 96);"></path></g><g id="__id114_sdxa29b60k"><path d="M 292.566406 185.203125 C 292.390625 185.203125 292.210938 185.144531 292.066406 185.015625 C 291.757812 184.738281 291.730469 184.265625 292.007812 183.957031 L 317.929688 154.835938 L 312.226562 147.539062 L 287.476562 175.261719 C 287.199219 175.566406 286.726562 175.597656 286.417969 175.320312 C 286.109375 175.042969 286.082031 174.570312 286.355469 174.261719 L 312.304688 145.203125 L 319.882812 154.894531 L 293.128906 184.953125 C 292.976562 185.121094 292.773438 185.203125 292.566406 185.203125" style="fill: rgb(27, 60, 96);"></path></g><g id="__id115_sdxa29b60k"><path d="M 308.769531 278.835938 C 308.53125 278.835938 308.300781 278.726562 308.15625 278.519531 C 307.917969 278.179688 307.996094 277.710938 308.335938 277.476562 L 367.519531 235.824219 C 367.859375 235.585938 368.328125 235.667969 368.5625 236.007812 C 368.804688 236.34375 368.722656 236.8125 368.382812 237.050781 L 309.199219 278.699219 C 309.070312 278.792969 308.917969 278.835938 308.769531 278.835938" style="fill: rgb(27, 60, 96);"></path></g><g id="__id116_sdxa29b60k"><path d="M 348.75 269.5 L 330.386719 262.617188 C 329.996094 262.472656 329.800781 262.042969 329.945312 261.652344 C 330.089844 261.265625 330.527344 261.070312 330.910156 261.214844 L 348.746094 267.894531 L 401.867188 247.519531 C 402.253906 247.371094 402.691406 247.5625 402.839844 247.949219 C 402.984375 248.335938 402.792969 248.769531 402.40625 248.917969 L 348.75 269.5" style="fill: rgb(27, 60, 96);"></path></g><g id="__id117_sdxa29b60k"><path d="M 266.011719 49.746094 C 266.011719 53.6875 269.207031 56.882812 273.144531 56.882812 C 277.085938 56.882812 280.28125 53.6875 280.28125 49.746094 C 280.28125 45.808594 277.085938 42.613281 273.144531 42.613281 C 269.207031 42.613281 266.011719 45.808594 266.011719 49.746094" style="fill: rgb(246, 212, 210);"></path></g><g id="__id118_sdxa29b60k"><path d="M 276.015625 54.097656 C 275.96875 54.097656 275.921875 54.09375 275.871094 54.082031 C 275.464844 54.003906 275.199219 53.609375 275.28125 53.203125 C 275.324219 52.972656 276.332031 47.582031 272.160156 46.492188 C 271.757812 46.386719 271.519531 45.976562 271.625 45.578125 C 271.726562 45.175781 272.144531 44.9375 272.539062 45.039062 C 276.972656 46.199219 277.234375 51.078125 276.75 53.492188 C 276.679688 53.851562 276.367188 54.097656 276.015625 54.097656" style="fill: rgb(27, 60, 96);"></path></g><g id="__id119_sdxa29b60k"><path d="M 270.132812 51.878906 C 269.96875 51.878906 269.808594 51.828125 269.667969 51.71875 C 269.34375 51.460938 269.289062 50.996094 269.542969 50.671875 C 269.625 50.5625 271.648438 48.03125 275.652344 47.964844 C 276.078125 47.953125 276.40625 48.285156 276.414062 48.699219 C 276.421875 49.113281 276.09375 49.453125 275.679688 49.464844 C 272.414062 49.519531 270.789062 51.511719 270.722656 51.597656 C 270.574219 51.78125 270.351562 51.878906 270.132812 51.878906" style="fill: rgb(27, 60, 96);"></path></g><g id="__id120_sdxa29b60k"><path d="M 152.59375 9.765625 C 152.59375 15.160156 148.222656 19.535156 142.824219 19.535156 C 137.429688 19.535156 133.058594 15.160156 133.058594 9.765625 C 133.058594 4.371094 137.429688 -0.00390625 142.824219 -0.00390625 C 148.222656 -0.00390625 152.59375 4.371094 152.59375 9.765625" style="fill: rgb(27, 60, 96);"></path></g><g id="__id121_sdxa29b60k"><path d="M 140.195312 19.925781 C 139.851562 19.925781 139.542969 19.691406 139.464844 19.34375 C 139.371094 18.941406 139.621094 18.535156 140.027344 18.445312 L 149.136719 16.34375 C 149.542969 16.253906 149.945312 16.503906 150.039062 16.90625 C 150.128906 17.308594 149.878906 17.710938 149.476562 17.804688 L 140.363281 19.90625 C 140.308594 19.917969 140.25 19.925781 140.195312 19.925781" style="fill: rgb(103, 114, 229);"></path></g><g id="__id122_sdxa29b60k"><path d="M 69.238281 136.925781 C 69.203125 136.925781 69.171875 136.921875 69.136719 136.917969 L 64.09375 136.238281 C 61.371094 135.871094 58.90625 134.371094 57.324219 132.125 C 55.742188 129.878906 55.164062 127.050781 55.738281 124.363281 L 58.050781 113.550781 C 58.371094 112.054688 59.492188 110.898438 60.976562 110.53125 C 62.460938 110.160156 63.992188 110.664062 64.972656 111.835938 L 79.976562 129.800781 C 80.242188 130.117188 80.199219 130.589844 79.882812 130.855469 C 79.5625 131.121094 79.089844 131.078125 78.824219 130.761719 L 63.820312 112.800781 C 63.199219 112.058594 62.273438 111.753906 61.335938 111.984375 C 60.398438 112.21875 59.71875 112.921875 59.519531 113.863281 L 57.207031 124.679688 C 56.710938 126.988281 57.191406 129.328125 58.550781 131.261719 C 59.910156 133.195312 61.953125 134.4375 64.292969 134.753906 L 69.335938 135.429688 C 69.746094 135.484375 70.035156 135.863281 69.980469 136.273438 C 69.929688 136.648438 69.605469 136.925781 69.238281 136.925781" style="fill: rgb(27, 60, 96);"></path></g><g id="__id123_sdxa29b60k"><path d="M 365.898438 136.761719 C 365.53125 136.761719 365.210938 136.488281 365.15625 136.113281 C 365.101562 135.699219 365.390625 135.324219 365.800781 135.269531 L 370.84375 134.589844 C 373.183594 134.273438 375.226562 133.035156 376.585938 131.101562 C 377.945312 129.164062 378.425781 126.828125 377.929688 124.515625 L 375.621094 113.703125 C 375.417969 112.757812 374.738281 112.054688 373.800781 111.824219 C 372.867188 111.59375 371.9375 111.894531 371.316406 112.636719 L 356.3125 130.601562 C 356.050781 130.917969 355.570312 130.960938 355.257812 130.695312 C 354.9375 130.429688 354.894531 129.957031 355.160156 129.636719 L 370.167969 111.675781 C 371.144531 110.503906 372.683594 110 374.160156 110.367188 C 375.644531 110.734375 376.765625 111.894531 377.085938 113.386719 L 379.398438 124.203125 C 379.972656 126.886719 379.394531 129.71875 377.8125 131.964844 C 376.234375 134.210938 373.765625 135.710938 371.042969 136.074219 L 366.003906 136.753906 C 365.96875 136.761719 365.933594 136.761719 365.898438 136.761719" style="fill: rgb(27, 60, 96);"></path></g><g id="__id124_sdxa29b60k"><path d="M 343.675781 167.832031 C 343.523438 167.832031 343.371094 167.785156 343.242188 167.691406 C 342.910156 167.449219 342.835938 166.980469 343.074219 166.648438 L 365.390625 135.523438 C 365.628906 135.191406 366.09375 135.117188 366.421875 135.355469 C 366.753906 135.597656 366.828125 136.066406 366.589844 136.398438 L 344.273438 167.523438 C 344.132812 167.722656 343.902344 167.832031 343.675781 167.832031" style="fill: rgb(27, 60, 96);"></path></g></g></svg>
            </div>
        </div>
        <h3 class="text-primary" style="font-size: 30px">
            List of the best mobile applications for photos and videos editing <br>
            <small style=" font-size: 17px; color: #343a40 ">
                <i class="fas fa-star" style="color: #feb13a;"></i> - means "base application"
            </small>
        </h3>

    </div>

    <div class="btn-toolbar mb-2 text-center" role="toolbar">
        <div class="btn-group btn-group-tab mr-2 mb-2 text-center " role="group" aria-label="Outline Primary First group" style="width: 100%" id="tab-buttons">
            <button type="button" class="btn btn-outline-dark" :class="currentTab == 'retouch' ? 'active' : ''" @click="changeTab('retouch')">For retouching face, skin, body</button>
            <button type="button" class="btn btn-outline-dark" :class="currentTab == 'edit-video' ? 'active' : ''" @click="changeTab('edit-video')">For video editing</button>
            <button type="button" class="btn btn-outline-dark" :class="currentTab == 'edit-photos' ? 'active' : ''" @click="changeTab('edit-photos')">To diversify your photos</button>
            <button type="button" class="btn btn-outline-dark" :class="currentTab == 'templates' ? 'active' : ''" @click="changeTab('templates')">Templates for stories</button>
            <button type="button" class="btn btn-outline-dark" :class="currentTab == 'color' ? 'active' : ''" @click="changeTab('color')">For color and light correction</button>
            <button type="button" class="btn btn-outline-dark" :class="currentTab == 'new-apps' ? 'active' : ''" @click="changeTab('new-apps')">New Apps</button>
        </div>
    </div>
    <div style="    margin-top: 60px;">

    </div>

    <div v-if="currentTab == 'retouch'" id="retouch">
        <div class="row app-div">
        @foreach($apps as $app)
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="p p-idea-photo">
                                @if( key_exists('base', $app) )
                                    <i class="fas fa-star app-base"></i>
                                @endif
                                <img src="/app/lectures/img/best_apps/{{ $app['path'] }}" alt="{{ $app['name'] }}" class="idea-photo idea-photo-app">
                                <br>
                                <span class="app-span">{{ $app['name'] }}</span>
                            </p>
                        </div>
                        <div class="col-md-8">
                            <p class="p">
                                {!! $app['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
    </div>
    <div v-if="currentTab == 'edit-video'" id="edit-video">
        <div class="row app-div">
        @foreach($videoApps as $app)
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <p class="p p-idea-photo">
                            @if( key_exists('base', $app) )
                                <i class="fas fa-star app-base"></i>
                            @endif
                            <img src="/app/lectures/img/best_apps/{{ $app['path'] }}" alt="{{ $app['name'] }}" class="idea-photo idea-photo-app">
                            <br>
                            <span class="app-span">{{ $app['name'] }}</span>
                        </p>
                    </div>
                    <div class="col-md-8">
                        <p class="p">
                            {!! $app['content'] !!}
                        </p>
                    </div>
                </div>
            </div>

        @endforeach
        </div>
    </div>
    <div v-if="currentTab == 'edit-photos'" id="edit-photos">
        <div class="row app-div">
        @foreach($photoDecor as $app)
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="p p-idea-photo">
                                @if( key_exists('base', $app) )
                                    <i class="fas fa-star app-base"></i>
                                @endif
                                <img src="/app/lectures/img/best_apps/{{ $app['path'] }}" alt="{{ $app['name'] }}" class="idea-photo idea-photo-app">
                                <br>
                                <span class="app-span">{{ $app['name'] }}</span>
                            </p>
                        </div>
                        <div class="col-md-8">
                            <p class="p">
                                {!! $app['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
    </div>
    <div v-if="currentTab == 'templates'" id="templates">
        <p class="text-center" style="font-size: 17px;">
            All of these apps have one function - to provide cool templates for your Instagram stories! The difference in templates and animations. Top Design Apps For Instagram Stories!
        </p>
        <div class="row app-div">
        @foreach($templatesStory as $app)
                <div class="col-md-2">
                    <p class="p p-idea-photo">
                        @if( key_exists('base', $app) )
                            <i class="fas fa-star app-base"></i>
                        @endif
                        <img src="/app/lectures/img/best_apps/{{ $app['path'] }}" alt="{{ $app['name'] }}" class="idea-photo idea-photo-app">
                        <br>
                        <span class="app-span">{{ $app['name'] }}</span>
                    </p>
                    <span class="p text-center" style="margin-top: -10%;     margin-bottom: 40px;">
                        {!! $app['content'] !!}
                    </span>
                </div>
        @endforeach
        </div>
    </div>
    <div v-if="currentTab == 'color'" id="color">
        <div class="row">
            @foreach($colorBase as $app)

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="p p-idea-photo">
                                    <i class="fas fa-star app-base"></i>
                                    <img src="/app/lectures/img/best_apps/{{ $app['path'] }}" alt="{{ $app['name'] }}" class="idea-photo idea-photo-app">
                                    <br>
                                    <span class="app-span">{{ $app['name'] }}</span>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <p class="p">
                                    {!! $app['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>

            @endforeach
        </div>
        <div class="row">
            @foreach($colors as $app)

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="p p-idea-photo">
                                @if( key_exists('base', $app) )
                                    <i class="fas fa-star app-base"></i>
                                @endif
                                <img src="/app/lectures/img/best_apps/{{ $app['path'] }}" alt="{{ $app['name'] }}" class="idea-photo idea-photo-app">
                                <br>
                                <span class="app-span">{{ $app['name'] }}</span>
                            </p>
                        </div>
                        <div class="col-md-8">
                            <p class="p">
                                {!! $app['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
    <div v-if="currentTab == 'new-apps'" id="new-apps">
        <h4>
            New Apps
        </h4>
        <div class="row app-div">
        @foreach($newApps as $app)
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="p p-idea-photo">
                                @if( key_exists('base', $app) )
                                    <i class="fas fa-star app-base"></i>
                                @endif
                                <img src="/app/lectures/img/best_apps/{{ $app['path'] }}" alt="{{ $app['name'] }}" class="idea-photo idea-photo-app">
                                <br>
                                <span class="app-span">{{ $app['name'] }}</span>
                            </p>
                        </div>
                        <div class="col-md-8">
                            <p class="p">
                                {!! $app['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
    </div>

</div>