import {
  presets,
  queueWrite
} from "https://cdn.skypack.dev/glitched-writer@2.0.29";

const phrases = [
  "Penetration Tester",
  "Web Developer",
  "Python Programmer",
  "Internet troll"
];

queueWrite(
  phrases,
  ".sidebar .profile p",
  {
    ...presets.neo,
    letterize: true
  },
  1337,
  true
);