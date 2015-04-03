echo "running ffmpeg script"
yes | ffmpeg -i source.mp3 -ss 60 -t 70 cropped.mp3
yes | ffmpeg -i cropped.mp3 -af "afade=t=in:ss=0:d=4" fadein.mp3
yes | ffmpeg -i fadein.mp3 -af "afade=t=out:st=65:d=5" final.mp3
echo "done"