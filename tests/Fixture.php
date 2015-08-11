<?php

namespace ImageCoverTest;

return [
  ['fitsExactly', [500, 200], [500, 200], [0, 0, 500, 200]],
  ['fitsExactlyLarger', [500, 200], [1000, 400], [0, 0, 1000, 400]],
  ['fitsExactlySmaller', [500, 200], [250, 100], [0, 0, 250, 100]],
  ['translationOnlyX', [200, 200, 1, 0], [500, 200], [300, 0, 200, 200]],
  ['translationOnlyXOtherEdge', [200, 200, 0, 0], [500, 200], [0, 0, 200, 200]],
  ['translationYOnly', [100, 100, 0.5, 0], [100, 400], [0, 150, 100, 100]],
  ['translationYOnlyVerySmallImage', [100, 100, 0.5, 0], [4, 16], [0, 6, 4, 4]]
];
